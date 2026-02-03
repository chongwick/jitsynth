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

def populate_map(seeds):
    def _load_component_map():
        with open(COMPONENT_MAP,"r") as f:
            component_map = json.load(f)
        return component_map
    component_map = _load_component_map()

    def _write_component_map(component_map):
        with open(COMPONENT_MAP,"w") as f:
            json.dump(component_map,f,indent=4)

    for s in seeds:
        w = Walker(False)
        error,seq = w.analyze(s)
        #if not(error) and len(tree.output_all_nodes()) > 1:
        #    with open("graphs/{}.pickle".format(secrets.token_hex(10)),"wb") as f:
        #        pickle.dump(seq,f)
        #else:
        #    with open("graphs/{}.error.pickle".format(secrets.token_hex(10)),"wb") as f:
        #        pickle.dump(seq,f)

        for node in seq.output_all_nodes():
            node_type = str(type(node)).split(".")[1].split("\'")[0]
            if node_type not in component_map:
                component_map[node_type] = [s]
            else:
                if s not in component_map[node_type]:
                    '''
                    we need to be appending the graph name, not the 
                    source code file name
                    '''
                    component_map[node_type].append(s)

        for env in seq.output_all_envs():
            if isinstance(env,FunctionBranch):
                print("HERE")
            else:
                if env.flow_type not in component_map:
                    component_map[env.flow_type] = [s]
                else:
                    if s not in component_map[env.flow_type]:
                        component_map[env.flow_type].append(s)

        _write_component_map(component_map)

def print_constraint(constraint,depth=0):
    for component in constraint:
        if isinstance(component,list):
            print_constraint(component,depth+1)
        else:
            print("\t"*depth,type(component),component.comp_type)

def main():
    constraints = ["constraints/" + i for i in os.listdir("constraints")]
    seeds = ["seeds/" + i for i in os.listdir("seeds")]

    constraint = None
    with open(choice(constraints),"rb") as f:
        constraint = pickle.load(f)
    print_constraint(constraint)
    populate_map(seeds)


if __name__ == "__main__":
    main()
