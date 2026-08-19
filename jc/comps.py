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
    # Class-level defaults so pickles written before these attributes were
    # captured still expose them (unpickling restores __dict__ without
    # calling __init__).
    type_stable = None
    trip_count = None

    def __init__(self, comp_type, type_stable=None, trip_count=None):
        self.comp_type = comp_type
        # For loop regions (for/while/do_while): True if every loop-carried
        # variable keeps its type across the back-edge (the monomorphic hot
        # loop a tracing JIT specializes on), False if some variable's type
        # widens (a deopt-inducing loop), None if not applicable/unknown.
        self.type_stable = type_stable
        # For loop regions: statically inferred iteration count (how many
        # times the loop repeats), or None if it can't be determined. Drives
        # whether the loop crosses the JIT's hot-loop threshold.
        self.trip_count = trip_count

    def __repr__(self):
        parts = [repr(self.comp_type)]
        if self.type_stable is not None:
            parts.append(f"type_stable={self.type_stable!r}")
        if self.trip_count is not None:
            parts.append(f"trip_count={self.trip_count!r}")
        return f"ControlComp({', '.join(parts)})"


class DataComp(JOCComp):
    # Class-level defaults for backward compatibility with untyped pickles.
    type = "mixed"
    stable = None
    callee = None
    repeated = None

    def __init__(self, comp_type, type="mixed", stable=None,
                 callee=None, repeated=None):
        self.comp_type = comp_type
        # Inferred value type produced by this operation, drawn from the
        # lattice: int/float/string/bool/null/undefined/array/object/
        # function/mixed.
        self.type = type
        # For variable-writing ops (var_dec/assign/update): True if this
        # write keeps the variable monomorphic, False if it transitions the
        # variable to a new type, None if not a tracked variable write.
        self.stable = stable
        # For func_call ops: a key identifying the called function (e.g.
        # "f", "obj.method"), or None if it can't be determined.
        self.callee = callee
        # For func_call ops: True if this callee is called more than once
        # anywhere in the JOC (so the function gets hot / its call sites
        # repeat), False if called exactly once, None if callee unknown.
        self.repeated = repeated

    def __repr__(self):
        parts = [repr(self.comp_type)]
        if self.type != "mixed":
            parts.append(f"type={self.type!r}")
        if self.stable is not None:
            parts.append(f"stable={self.stable!r}")
        if self.callee is not None:
            parts.append(f"callee={self.callee!r}")
        if self.repeated is not None:
            parts.append(f"repeated={self.repeated!r}")
        return f"DataComp({', '.join(parts)})"
