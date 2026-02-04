from random import choice
import os
import pickle
from jc import *
import secrets
from walker import Walker
import json
from seqNodes import *
from sequence import *

COMPONENT_MAP = "component_map.json"

def _load_component_map():
    with open(COMPONENT_MAP,"r") as f:
        component_map = json.load(f)
    return component_map
component_map = _load_component_map()

def _write_component_map(component_map):
    with open(COMPONENT_MAP,"w") as f:
        json.dump(component_map,f,indent=4)

def populate_map(seeds):
    for s in seeds:
        w = Walker(False)
        error,seq = w.analyze(s)
        graph_name = None
        if not(error) and len(seq.output_all_nodes()) > 1:
            graph_name = "graphs/{}.pickle".format(secrets.token_hex(10))
            with open(graph_name,"wb") as f:
                pickle.dump(seq,f)
        else:
            graph_name = "graphs/{}.error.pickle".format(secrets.token_hex(10))
            with open(graph_name,"wb") as f:
                pickle.dump(seq,f)

        for node in seq.output_all_nodes():
            node_type = str(type(node)).split(".")[1].split("\'")[0]
            if node_type not in component_map:
                component_map[node_type] = [graph_name]
            else:
                if graph_name not in component_map[node_type]:
                    component_map[node_type].append(graph_name)

        for env_type in seq.output_env_buckets():
            if env_type not in component_map:
                component_map[env_type] = [graph_name]
            else:
                if graph_name not in component_map[env_type]:
                    component_map[env_type].append(graph_name)

        _write_component_map(component_map)
    quit()

def print_constraint(constraint,depth=0):
    for comp in constraint:
        if isinstance(comp,list):
            print_constraint(comp,depth+1)
        else:
            print("\t"*depth,type(comp),comp.comp_type)

def apply_constraint(constraint,component_map,seq):

    def _get_seq(c):
        if c.comp_type == "main":
            return seq
        elif c.comp_type == "func":
            seq_file = choice(component_map['function'])
            with open(seq_file,"rb") as f:
                full_seq = pickle.load(f)
            func_seq = choice(full_seq.output_env_buckets()['function'])
            return func_seq
        else:
            seq_file = choice(component_map[c.comp_type])
            with open(seq_file,"rb") as f:
                full_seq = pickle.load(f)
            flow_seq = choice(full_seq.output_env_buckets()[c.comp_type])
            return flow_seq

    if isinstance(constraint,list):
        tmp_seq = _get_seq(constraint[0])
        if constraint[0].comp_type == "func":
            seq.children_envs["Function"][tmp_seq.func_name] = tmp_seq
        elif constraint[0].comp_type != "main":
            seq.set_node(node=tmp_seq)
        for c in constraint[1:]:
            apply_constraint(c,component_map,tmp_seq)
    else:
        return

def main():
    constraints = ["constraints/" + i for i in os.listdir("constraints")]
    seeds = ["seeds/" + i for i in os.listdir("seeds")]

    constraint = None
    with open(choice(constraints),"rb") as f:
        constraint = pickle.load(f)

    #populate_map(seeds)
    component_map = _load_component_map()
    print_constraint(constraint)
    seq = Seq()
    apply_constraint(constraint,component_map,seq)
    h = []
    seq.output_env(h)
    print("\n".join(h))


if __name__ == "__main__":
    main()
