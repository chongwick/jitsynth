from utils import *
import json

########
# Each node needs access to the overall tree
# NO NODE should point DIRECTLY at a node!
# Nodes should ONLY be accessible via the environment
class ASNode():
    def get_rel_val(self,key):
        return self.rel_db[key]

    def get_value(self):
        if hasattr(self, "get_name"):
            return self.get_name()
        return str(self)

class SeqNode(ASNode):
    ...

class FuncSeqNode(SeqNode):
    def __init__(self,rel_db,func_name,arguments:list,dependency):
        self.rel_db = rel_db
        self.func_name = func_name
        self.arguments = arguments
        self.dependency = dependency 
        self.name = new_name()
        # We don't need to print nodes more than once, but the system typicall does that
        # because of its verbose, context-preserving nature. This just makes it cleaner.
        self.printed = False

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_dependency(self):
        return self.dependency

    def get_func_name(self):
        return self.func_name

    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            ret_expr = "{v} = {f}(".format(v=self.name,
                                           f=self.func_name)
            #I can make list comprehensions much much worse
            #don't complain ㅅㅂㄴㅁ
            args = []
            for a in self.arguments:
                node = self.get_rel_val(a)
                args.append("null" if node is None else node.get_expression(pp_env))
            for a in args:
                ret_expr += a +","
            ret_expr += ");"
            pp_env.append(ret_expr)
        return self.name

class GenericCallSeqNode(SeqNode):
    def __init__(self,rel_db,call,argument):
        self.rel_db = rel_db
        self.call = call
        self.argument = argument
        self.printed = False
        self.name = new_name()

    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            if self.argument != None:
                arg = self.argument.get_expression(pp_env)
                if self.call in ("return", "yield", "yield from", "print", "throw", "exit", "clone", "echo"):
                    if self.call in ("print", "exit", "clone"):
                        ret_expr = "{v} = {c}({a});".format(v=self.name, c=self.call, a=arg)
                    else:
                        ret_expr = "{c} {a};".format(c=self.call, a=arg)
                elif self.call == "":
                    ret_expr = "{a};".format(a=arg)
                else:
                    ret_expr = "{c}({a});".format(c=self.call,a=arg)
                pp_env.append(ret_expr)
            else:
                ret_expr = "{};".format(self.call)
                pp_env.append(ret_expr)
        return self.name

class MethodSeqNode(SeqNode):
    def __init__(self,rel_db,obj_name,method_name,arguments:list,dependency):
        self.rel_db = rel_db
        self.obj_name = obj_name
        self.method_name = method_name
        self.arguments = arguments
        self.dependency = dependency
        self.name = new_name()
        self.printed = False

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_dependency(self):
        return self.dependency

    def get_method_name(self):
        return self.method_name

    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            tmp_v = []
            ret_expr = ""
            if self.dependency != None:
                self.dependency.get_expression(tmp_v)
                ret_expr = "\n".join(tmp_v)
                ret_expr += "{v} = {on}->{mn}(".format(v=self.name,
                                                      on=self.dependency.get_name(),
                                                      mn=self.method_name)
            else:
                # This is special for try catch statements
                ret_expr += "{v} = ${on}->{mn}(".format(v=self.name,
                                                      on=self.obj_name,
                                                      mn=self.method_name)
            args = []
            for a in self.arguments:
                node = self.get_rel_val(a)
                args.append("null" if node is None else node.get_expression(pp_env))
            for a in args:
                ret_expr += a +","
            ret_expr += ");"
            pp_env.append(ret_expr)
        return self.name

class PropertyFetchNode(SeqNode):
    def __init__(self,rel_db,obj_name,property_name,dependency):
        self.rel_db = rel_db
        self.obj_name = obj_name
        self.property_name = property_name
        self.dependency = dependency
        self.name = new_name()
        self.printed = False

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_dependency(self):
        return self.dependency

    def get_property_name(self):
        return self.property_name

    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            tmp_v = []
            ret_expr = ""
            if self.dependency != None:
                self.dependency.get_expression(tmp_v)
                #raise ValueError("PropertyFetch")
                ret_expr = "\n".join(tmp_v)
                ret_expr += "\n{v} = {on}->{mn};".format(v=self.name,
                                                      on=self.dependency.get_name(),
                                                      mn=self.property_name)
            else:
                # This is special for try catch statements
                ret_expr += "\n{v} = ${on}->{mn};".format(v=self.name,
                                                      on=self.obj_name,
                                                      mn=self.property_name)
            #args = [a.get_expression(pp_env) for a in self.arguments]
            #for a in args:
            #    ret_expr += a +","
            #ret_expr += ");"
            pp_env.append(ret_expr)
        return self.name

class ObjDecSeqNode(SeqNode):
    def __init__(self,rel_db,obj_name,class_name,arguments:list,dependency):
        self.rel_db = rel_db
        self.obj_name = obj_name
        self.class_name = class_name
        self.arguments = arguments
        self.dependency = dependency
        self.name = new_name()
        self.printed = False

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_dependency(self):
        return self.dependency

    def get_obj_name(self):
        return self.obj_name

    def get_class_name(self):
        return self.class_name

    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            ret_expr = ""
            if self.dependency != None:
                if isinstance(self.dependency, ASNode):
                    tmp = []
                    self.dependency.get_expression(tmp)
                    ret_expr += "\n".join(tmp) + "\n"
                else:
                    ret_expr += self.dependency + "\n"
            ret_expr += "{v} = new {c}(".format(v=self.name,
                                               c=self.class_name)
            args = []
            for a in self.arguments:
                node = self.get_rel_val(a)
                args.append("null" if node is None else node.get_expression(pp_env))
            for a in args:
                ret_expr += a + ","
            ret_expr += ");"
            pp_env.append(ret_expr)
        return self.name

class StaticCallSeqNode(ObjDecSeqNode):
    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            ret_expr = ""
            if self.dependency != None:
                if isinstance(self.dependency, ASNode):
                    tmp = []
                    self.dependency.get_expression(tmp)
                    ret_expr += "\n".join(tmp) + "\n"
                else:
                    ret_expr += self.dependency + "\n"
            ret_expr += "{v} = {cn}(".format(v=self.name,
                                                   cn=self.class_name)
            args = []
            for a in self.arguments:
                node = self.get_rel_val(a)
                args.append("null" if node is None else node.get_expression(pp_env))
            for a in args:
                ret_expr += a + ","
            ret_expr += ");"
            pp_env.append(ret_expr)
        return self.name

# GenericSeqNodes have NO DEPENDENCIES! and need no access to the relational database
class GenericSeqNode(SeqNode):
    def __init__(self,value,node_type=None,dependency=None):
        self.value = value
        self.type = node_type
        self.name = new_name()
        self.printed = False
        self.dependency = dependency
        #if self.type == "scalar_string":
        #    self.value = "\""+self.value+ "\"" 

    #def __str__(self):
    #    return str(self.value)

    def get_copy(self):
        copy = GenericSeqNode(self.value,node_type)
        copy.var = self.name
        return copy

    def set_type(self,node_type):
        self.type = node_type

    def get_type(self):
        return(self.type)

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_value(self):
        return self.value

    def set_value(self,value):
        self.value = value

    def get_expression(self,pp_env=[]):
        if self.value == None:
            self.value = self.name
        if not self.printed:
            self.printed = True
            ret_expr = "{v} = {val};".format(v=self.name,
                                             val=self.value)
            pp_env.append(ret_expr)
        return self.name

class NonAssignmentNode(SeqNode):
    def __init__(self,value):
        self.value = value
    def get_expression(self,pp_env):
        pp_env.append(self.value)

class InterpolatedStringNode(GenericSeqNode):
    def __init__(self,rel_db,value:list,node_type=None):
        self.rel_db = rel_db
        self.value = value
        self.printed = False
        self.name = new_name()
        self.type = node_type

    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            parts = []
            for p in self.value:
                if isinstance(p,int):
                    p_val = self.get_rel_val(p)
                    parts.append(p_val.get_expression(pp_env))
                else:
                    parts.append(repr(p))
            if len(parts) == 0:
                ret_expr = "{v} = '';".format(v=self.name)
            else:
                ret_expr = "{v} = {parts};".format(v=self.name, parts=" . ".join(parts))
            pp_env.append(ret_expr)
        return self.name

class ArraySeqNode(SeqNode):
    def __init__(self,rel_db):
        self.rel_db = rel_db
        self.value = []
        self.literal_key_map = {}
        self.name = new_name()
        self.printed = False

    #def __str__(self):
    #    return str(self.value)

    def add_value(self, key, value):
        if key is None:
            self.value.append((None, value))
            return
        key_node = self.get_rel_val(key)
        literal_key = None
        if isinstance(key_node, GenericSeqNode):
            literal_key = key_node.get_value()
        self.value.append((key, value))
        if literal_key is not None:
            self.literal_key_map[str(literal_key)] = value

    def get_value_by_key(self,key):
        key_str = str(key)
        if key_str not in self.literal_key_map:
            raise KeyError(key_str)
        return ArrayValueNode(key,self.name,dependency=self)
        #return self.get_rel_val(self.value[key])

    def set_type(self,node_type):
        self.type = node_type

    def get_type(self):
        return(self.type)

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_value(self):
        return self.literal_key_map

    def set_value(self,value):
        if isinstance(value, dict):
            self.value = []
            self.literal_key_map = {}
            for k, v in value.items():
                self.value.append((k, v))
                self.literal_key_map[str(k)] = v
        else:
            self.value = value

    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            ret_expr = "{v} = array(".format(v=self.name)
            for k,v in self.value:
                value_expr = self.get_rel_val(v).get_expression(pp_env)
                if k is None:
                    ret_expr += "{value},".format(value=value_expr)
                else:
                    key_node = self.get_rel_val(k)
                    key_expr = key_node.get_expression(pp_env)
                    ret_expr += "{key} => {value},".format(key=key_expr,
                                                           value=value_expr)
            ret_expr += ");"
            pp_env.append(ret_expr)
        return self.name

# This might be a little dirty idk it's late
class ArrayValueNode(GenericSeqNode):
    def __init__(self,value,arr_name,node_type=None,dependency=None):
        self.value = value
        self.arr_name = arr_name
        self.type = node_type
        self.name = new_name()
        self.printed = False
        self.dependency = dependency

    def get_expression(self,pp_env=[]):
        self.dependency.get_expression(pp_env)
        if self.value == None:
            self.value = self.name
        if not self.printed:
            self.printed = True
            ret_expr = "{v} = {a}[{k}];".format(v=self.name,
                                                a=self.arr_name,
                                                k=self.value)
            pp_env.append(ret_expr)
        return self.name



class FlexArrayDimFetchNode(SeqNode):
    def __init__(self,rel_db,var,dim):
        self.rel_db = rel_db
        self.var = var
        self.dim = dim
        self.name = new_name()
        self.printed = False

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name
        
    def get_expression(self,pp_env): # this is just experimental. ykwtd
        if not self.printed:
            self.printed = True
            #node = self.get_rel_val(self.node_key)
            dim_expr = "null"
            if self.dim is not None:
                dim_expr = self.dim.get_expression(pp_env)
            ret_expr = "{v} = {var}[{dim}];".format(v=self.name,
                                                    var=self.var.get_expression(pp_env),
                                                    dim=dim_expr)
            pp_env.append(ret_expr)
        return self.name


class NullsafePropertyFetchNode(PropertyFetchNode):
    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            tmp_v = []
            ret_expr = ""
            if self.dependency != None:
                self.dependency.get_expression(tmp_v)
                ret_expr = "\n".join(tmp_v)
                ret_expr += "\n{v} = {on}?->{mn};".format(v=self.name,
                                                           on=self.dependency.get_name(),
                                                           mn=self.property_name)
            else:
                ret_expr += "{v} = ${on}?->{mn};".format(v=self.name,
                                                         on=self.obj_name,
                                                         mn=self.property_name)
            pp_env.append(ret_expr)
        return self.name


class NullsafeMethodSeqNode(MethodSeqNode):
    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            tmp_v = []
            ret_expr = ""
            if self.dependency != None:
                self.dependency.get_expression(tmp_v)
                ret_expr = "\n".join(tmp_v)
                ret_expr += "{v} = {on}?->{mn}(".format(v=self.name,
                                                        on=self.dependency.get_name(),
                                                        mn=self.method_name)
            else:
                ret_expr += "{v} = ${on}?->{mn}(".format(v=self.name,
                                                         on=self.obj_name,
                                                         mn=self.method_name)
            args = []
            for a in self.arguments:
                node = self.get_rel_val(a)
                args.append("null" if node is None else node.get_expression(pp_env))
            for a in args:
                ret_expr += a + ","
            ret_expr += ");"
            pp_env.append(ret_expr)
        return self.name


class TernarySeqNode(SeqNode):
    def __init__(self,rel_db,cond_key,if_key,else_key):
        self.rel_db = rel_db
        self.cond_key = cond_key
        self.if_key = if_key
        self.else_key = else_key
        self.name = new_name()
        self.printed = False

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            cond = self.get_rel_val(self.cond_key).get_expression(pp_env)
            if_expr = "null"
            if self.if_key is not None:
                if_expr = self.get_rel_val(self.if_key).get_expression(pp_env)
            else_expr = self.get_rel_val(self.else_key).get_expression(pp_env)
            pp_env.append("{v} = ({c}) ? ({i}) : ({e});".format(v=self.name, c=cond, i=if_expr, e=else_expr))
        return self.name


class ClassPropertyDefNode(SeqNode):
    def __init__(self,rel_db,name,visibility="public",is_static=False,default_key=None,default_raw=None):
        self.rel_db = rel_db
        self.name = name
        self.visibility = visibility
        self.is_static = is_static
        self.default_key = default_key
        self.default_raw = default_raw

    def get_expression(self,pp_env):
        prefix = self.visibility
        if self.is_static:
            prefix += " static"
        if self.default_raw is not None:
            pp_env.append("{p} ${n} = {v};".format(p=prefix, n=self.name, v=self.default_raw))
        elif self.default_key is None:
            pp_env.append("{p} ${n};".format(p=prefix, n=self.name))
        else:
            val_node = self.get_rel_val(self.default_key)
            val = val_node.get_value() if isinstance(val_node, GenericSeqNode) else val_node.get_expression(pp_env)
            pp_env.append("{p} ${n} = {v};".format(p=prefix, n=self.name, v=val))


class ClassConstDefNode(SeqNode):
    def __init__(self,rel_db,name,value_key=None,value_raw=None):
        self.rel_db = rel_db
        self.name = name
        self.value_key = value_key
        self.value_raw = value_raw

    def get_expression(self,pp_env):
        if self.value_raw is not None:
            val = self.value_raw
        else:
            val_node = self.get_rel_val(self.value_key)
            val = val_node.get_value() if isinstance(val_node, GenericSeqNode) else val_node.get_expression(pp_env)
        pp_env.append("const {n} = {v};".format(n=self.name, v=val))


class ClassMethodDefNode(SeqNode):
    def __init__(self,rel_db,name,body_env,params=None,visibility="public",is_static=False,is_abstract=False,is_final=False):
        self.rel_db = rel_db
        self.name = name
        self.body_env = body_env
        self.params = params or []
        self.visibility = visibility
        self.is_static = is_static
        self.is_abstract = is_abstract
        self.is_final = is_final

    def get_expression(self,pp_env):
        header = []
        if self.is_final:
            header.append("final")
        if self.is_abstract:
            header.append("abstract")
        header.append(self.visibility)
        if self.is_static:
            header.append("static")
        sig = " ".join(header) + " function " + self.name + "("
        pieces = []
        for item in self.params:
            param_txt = "$" + item["name"]
            if item.get("default_raw") is not None:
                default_expr = item["default_raw"]
                param_txt += " = " + default_expr
            elif item.get("default_key") is not None:
                default_node = self.get_rel_val(item["default_key"])
                if isinstance(default_node, GenericSeqNode):
                    default_expr = str(default_node.get_value())
                else:
                    default_expr = default_node.get_expression(pp_env)
                param_txt += " = " + default_expr
            pieces.append(param_txt)
        sig += ",".join(pieces) + ")"
        if self.is_abstract:
            pp_env.append(sig + ";")
            return
        body_lines = []
        for value in self.body_env.get_node_env().values():
            value.get_expression(body_lines)
        pp_env.append(sig + "{\n" + "\n".join(body_lines) + "\n}")


class ClassDefNode(SeqNode):
    def __init__(self,class_name,members=None,extends_name=None,implements_names=None):
        self.class_name = class_name
        self.members = members or []
        self.extends_name = extends_name
        self.implements_names = implements_names or []
        self.printed = False

    def add_member(self,member):
        self.members.append(member)

    def get_expression(self,pp_env):
        if self.printed:
            return
        self.printed = True
        class_head = "class " + self.class_name
        if self.extends_name:
            class_head += " extends " + self.extends_name
        if self.implements_names:
            class_head += " implements " + ",".join(self.implements_names)
        body = []
        for member in self.members:
            member.get_expression(body)
        pp_env.append(class_head + "{\n" + "\n".join(body) + "\n}")

class OPNode(ASNode):
    def getExpression(self):
        ...
    def getValue(self):
        ...
    def getNodeExpression(self):
        ...
    def addDependency(self,node:ASNode):
        if isinstance(node,ASNode):
            self.dependencies.append(node)

class MiddleOpNode(OPNode):
    def __init__(self,rel_db,left_key,right_key,value,node_type=None):
        self.rel_db = rel_db
        self.left_key = left_key
        self.right_key = right_key
        self.value = value
        self.dependencies = []
        self.name = new_name()
        self.type = node_type
        self.printed = False

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_value(self):
        return self.value

    def set_value(self,value):
        self.value = value

    def set_type(self,node_type):
        self.type = node_type

    def get_type(self):
        return(self.type)

    def get_node_expression(self):
        return [self, self.left.get_node_expression(),self.right.get_node_expression()]

    def get_expression(self,pp_env): # this is just experimental. ykwtd
        if not self.printed:
            self.printed = True
            left = self.get_rel_val(self.left_key)
            right = self.get_rel_val(self.right_key)
            ret_expr = "{v} = {l} {op} {r};".format(v=self.name,
                                                    l=left.get_expression(pp_env),
                                                    op=self.value,
                                                    r=right.get_expression(pp_env))
            pp_env.append(ret_expr)
        return self.name

class FrontOpNode(OPNode):
    def __init__(self,rel_db,node_key,value):
        self.rel_db = rel_db
        self.node_key = node_key
        self.pos = 'f'
        self.value = value
        self.dependencies = []
        self.name = new_name()
        self.printed = False

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_value(self):
        return self.value

    def set_value(self,value):
        self.value = value

    def set_type(self,node_type):
        self.type = node_type

    def get_type(self,node_type):
        return(self.type)

    def getNodeExpression(self):
        return [self, self.node.getNodeExpression()]

    def get_expression(self,pp_env): # this is just experimental. ykwtd
        if not self.printed:
            self.printed = True
            node = self.get_rel_val(self.node_key)
            ret_expr = "{v} = {op}({val});".format(v=self.name,
                                                   op=self.value,
                                                   val=node.get_expression(pp_env))
            pp_env.append(ret_expr)
        return self.name

# this is not correct
class InnerOpNode(FrontOpNode):
    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            node = self.get_rel_val(self.node_key)
            ret_expr = "{v} {op} ({val});".format(v=self.name,
                                                   op=self.value,
                                                   val=node.get_expression(pp_env))
            pp_env.append(ret_expr)
        return self.name

class RearOpNode(FrontOpNode):
    def get_expression(self,pp_env):
        if not self.printed:
            self.printed = True
            node = self.get_rel_val(self.node_key)
            ret_expr = "{v} = {val};".format(v=self.name,
                                                   val = node.get_expression(pp_env))
            ret_expr += "\n{v}{op};".format(v=self.name,
                                                  op=self.value)
            pp_env.append(ret_expr)
        return self.name


class JSExprNode(SeqNode):
    def __init__(self, expr):
        self.expr = expr
        self.name = js_new_name()

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_expression(self,pp_env):
        return self.expr


class JSPropertyAccessNode(SeqNode):
    def __init__(self, obj_expr, prop_expr, computed=False, optional=False):
        self.obj_expr = obj_expr
        self.prop_expr = prop_expr
        self.computed = computed
        self.optional = optional
        self.name = js_new_name()

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_expression(self,pp_env):
        obj = self.obj_expr.get_expression(pp_env)
        prop = self.prop_expr.get_expression(pp_env)
        if self.computed:
            if self.optional:
                return "{o}?.[{p}]".format(o=obj, p=prop)
            return "{o}[{p}]".format(o=obj, p=prop)
        if (len(obj) > 0 and obj[0].isdigit()) or obj.startswith("-") or obj.startswith("{") or obj.startswith("[") or obj.startswith("function") or obj.startswith("class") or obj.startswith("async function"):
            obj = "(" + obj + ")"
        if self.optional:
            return "{o}?.{p}".format(o=obj, p=prop)
        return "{o}.{p}".format(o=obj, p=prop)


class JSCallNode(SeqNode):
    def __init__(self, callee_expr, arg_exprs, is_new=False):
        self.callee_expr = callee_expr
        self.arg_exprs = arg_exprs
        self.is_new = is_new
        self.name = js_new_name()

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_expression(self,pp_env):
        callee = self.callee_expr.get_expression(pp_env)
        args = ",".join(a.get_expression(pp_env) for a in self.arg_exprs)
        prefix = "new " if self.is_new else ""
        return "{p}{c}({a})".format(p=prefix, c=callee, a=args)


class JSArrayLiteralNode(SeqNode):
    def __init__(self, elements):
        self.elements = elements
        self.name = js_new_name()

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_expression(self,pp_env):
        vals = []
        for elem in self.elements:
            if elem is None:
                vals.append("")
            else:
                vals.append(elem.get_expression(pp_env))
        return "[" + ",".join(vals) + "]"


class JSObjectLiteralNode(SeqNode):
    def __init__(self, properties):
        self.properties = properties
        self.name = js_new_name()

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_expression(self,pp_env):
        parts = []
        for key, value, computed, shorthand in self.properties:
            if shorthand:
                parts.append(key)
                continue
            val = value.get_expression(pp_env)
            if computed:
                parts.append("[{k}]: {v}".format(k=key, v=val))
            else:
                parts.append("{k}: {v}".format(k=key, v=val))
        return "{" + ",".join(parts) + "}"


class JSFunctionNode(SeqNode):
    def __init__(self, name, params, body, is_expression=False, is_async=False):
        self.fn_name = name
        self.params = params
        self.body = body
        self.is_expression = is_expression
        self.is_async = is_async
        self.name = js_new_name()

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_expression(self,pp_env):
        async_prefix = "async " if self.is_async else ""
        param_txt = ",".join(self.params)
        if self.is_expression:
            name_part = ""
            if self.fn_name:
                name_part = " " + self.fn_name
            return "{a}function{n}({p}){{{b}}}".format(a=async_prefix, n=name_part, p=param_txt, b=self.body)
        return "{a}function {n}({p}){{{b}}}".format(a=async_prefix, n=self.fn_name, p=param_txt, b=self.body)


class JSControlNode(SeqNode):
    def __init__(self, statement):
        self.statement = statement
        self.name = js_new_name()

    def get_name(self):
        return self.name

    def set_name(self,name):
        self.name = name

    def get_expression(self,pp_env):
        pp_env.append(self.statement)
        return self.statement
