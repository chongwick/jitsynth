class JOCComp():
    def get_comp(element):
        comps = {"var_dec": DataComp
                }
        return comps[element]

class ObjComp(JOCComp):
    def __init__(self,comp_type):
        self.comp_type = comp_type

class ControlComp(JOCComp):
    def __init__(self,comp_type):
        self.comp_type = comp_type

class DataComp(JOCComp):
    def __init__(self,comp_type):
        self.comp_type = comp_type
