class JOCComp():
    @staticmethod
    def get_comp(element):
        comps = {
            # Data components
            "var_dec": DataComp,
            "assign": DataComp,
            "func_call": DataComp,
            "unary": DataComp,
            "update": DataComp,
            "return": DataComp,
            "throw": DataComp,
            "new": DataComp,
            # Control components
            "main": ControlComp,
            "if": ControlComp,
            "else": ControlComp,
            "for": ControlComp,
            "while": ControlComp,
            "do_while": ControlComp,
            "try": ControlComp,
            "catch": ControlComp,
            "finally": ControlComp,
            "func": ControlComp,
            "class": ControlComp,
            "method": ControlComp,
            "switch": ControlComp,
        }
        return comps[element]

    def __repr__(self):
        return f"{self.__class__.__name__}()"


class ObjComp(JOCComp):
    def __init__(self, comp_type):
        self.comp_type = comp_type

    def __repr__(self):
        return f"ObjComp({self.comp_type!r})"


class ControlComp(JOCComp):
    def __init__(self, comp_type):
        self.comp_type = comp_type

    def __repr__(self):
        return f"ControlComp({self.comp_type!r})"


class DataComp(JOCComp):
    def __init__(self, comp_type):
        self.comp_type = comp_type

    def __repr__(self):
        return f"DataComp({self.comp_type!r})"
