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

        for env in seq.output_all_envs():
            if env.flow_type not in component_map:
                component_map[env.flow_type] = [graph_name]
            else:
                if graph_name not in component_map[env.flow_type]:
                    component_map[env.flow_type].append(graph_name)

        _write_component_map(component_map)

def print_constraint(constraint,depth=0):
    for comp in constraint:
        if isinstance(comp,list):
            print_constraint(comp,depth+1)
        else:
            print("\t"*depth,type(comp),comp.comp_type)

def apply_constraint(constraint,component_map):
    new_seq = Seq()
    for comp in constraint: #first one is a formality
        if isinstance(comp,list):
            apply_constraint(comp,component_map)
        else:
            print(comp.comp_type)
            node = None
            if comp.comp_type == "func":
                env = choice(component_map['function'])
                with open(env,"rb") as f:
                    pickle.load(f)
                for i in env.output_all_envs:
                    if i.flow_type == "function":
                        node = i
                        break
                print(node);quit()
            elif comp.comp_type == "for":
                env = choice(component_map['for'])
                with open(env,"rb") as f:
                    pickle.load(f)
                for i in env.output_all_envs:
                    if i.flow_type == "for":
                        node = i
                        break

            if node != None:
                new_seq.set_node(node=node)
    #return new_seq

def main():
    constraints = ["constraints/" + i for i in os.listdir("constraints")]
    seeds = ["seeds/" + i for i in os.listdir("seeds")]

    constraint = None
    with open(choice(constraints),"rb") as f:
        constraint = pickle.load(f)

    #populate_map(seeds)
    component_map = _load_component_map()
    print_constraint(constraint)
    apply_constraint(constraint,component_map)


if __name__ == "__main__":
    main()
