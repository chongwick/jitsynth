def data_file(*name):
    return os.path.join(os.path.dirname(__file__), "certdata", *name)
def seclevel_workaround(*ctxs):
        """Lower security level to '1' and allow all ciphers for TLS 1.0/1"""
        for ctx in ctxs:
            if (
                hasattr(ctx, "minimum_version") and
                ctx.minimum_version <= ssl.TLSVersion.TLSv1_1 and
                ctx.security_level > 1
            ):
                ctx.set_ciphers("@SECLEVEL=1:ALL")
def has_tls_protocol(protocol):
    """Check if a TLS protocol is available and enabled

    :param protocol: enum ssl._SSLMethod member or name
    :return: bool
    """
    if isinstance(protocol, str):
        assert protocol.startswith('PROTOCOL_')
        protocol = getattr(ssl, protocol, None)
        if protocol is None:
            return False
    if protocol in {
        ssl.PROTOCOL_TLS, ssl.PROTOCOL_TLS_SERVER,
        ssl.PROTOCOL_TLS_CLIENT
    }:
        # auto-negotiate protocols are always available
        return True
    name = protocol.name
    return has_tls_version(name[len('PROTOCOL_'):])
def has_tls_version(version):
    """Check if a TLS/SSL version is enabled

    :param version: TLS version name or ssl.TLSVersion member
    :return: bool
    """
    if isinstance(version, str):
        version = ssl.TLSVersion.__members__[version]

    # check compile time flags like ssl.HAS_TLSv1_2
    if not getattr(ssl, f'HAS_{version.name}'):
        return False

    if IS_OPENSSL_3_0_0 and version < ssl.TLSVersion.TLSv1_2:
        # bpo43791: 3.0.0-alpha14 fails with TLSV1_ALERT_INTERNAL_ERROR
        return False

    # check runtime and dynamic crypto policy settings. A TLS version may
    # be compiled in but disabled by a policy or config option.
    ctx = ssl.SSLContext(ssl.PROTOCOL_TLS_CLIENT)
    if (
            hasattr(ctx, 'minimum_version') and
            ctx.minimum_version != ssl.TLSVersion.MINIMUM_SUPPORTED and
            version < ctx.minimum_version
    ):
        return False
    if (
        hasattr(ctx, 'maximum_version') and
        ctx.maximum_version != ssl.TLSVersion.MAXIMUM_SUPPORTED and
        version > ctx.maximum_version
    ):
        return False

    return True
def requires_tls_version(version):
    """Decorator to skip tests when a required TLS version is not available

    :param version: TLS version name or ssl.TLSVersion member
    :return:
    """
    def decorator(func):
        @functools.wraps(func)
        def wrapper(*args, **kw):
            if not has_tls_version(version):
                raise unittest.SkipTest(f"{version} is not available.")
        return wrapper
    return decorator
def utc_offset(): #NOTE: ignore issues like #1647654
    # local time = utc time + utc offset
    if time.daylight and time.localtime().tm_isdst > 0:
        return -time.altzone  # seconds
    return -time.timezone
def test_wrap_socket(sock, *,
                     cert_reqs=ssl.CERT_NONE, ca_certs=None,
                     ciphers=None, ciphersuites=None,
                     min_version=None, max_version=None,
                     certfile=None, keyfile=None,
                     **kwargs):
    if not kwargs.get("server_side"):
        kwargs["server_hostname"] = SIGNED_CERTFILE_HOSTNAME
        context = ssl.SSLContext(ssl.PROTOCOL_TLS_CLIENT)
    if cert_reqs is not None:
        if cert_reqs == ssl.CERT_NONE:
            context.check_hostname = False
        context.verify_mode = cert_reqs
    if ca_certs is not None:
        context.load_verify_locations(ca_certs)
    if certfile is not None or keyfile is not None:
        context.load_cert_chain(certfile, keyfile)
    if ciphers is not None:
        context.set_ciphers(ciphers)
    if ciphersuites is not None:
        context.set_ciphersuites(ciphersuites)
    if min_version is not None:
        context.minimum_version = min_version
    if max_version is not None:
        context.maximum_version = max_version
    return context.wrap_socket(sock, **kwargs)
def f_0():
    frames = []
    for i_1 in range(10):
        argument_group_signatures = []
    import sys
    import tracemalloc
    frame = sys._getframe(1)
    lineno = frame.f_lineno + lineno_delta
    nframe = tracemalloc.get_traceback_limit()
    frames = get_frames(nframe, 1)
    return traceback((filename, lineno))
import pathlib
import random
import tempfile
from compression.zstd import (
    open,
    compress,
    decompress,
    ZstdCompressor,
    ZstdDecompressor,
    ZstdDict,
    ZstdError,
    zstd_version,
    zstd_version_info,
    COMPRESSION_LEVEL_DEFAULT,
    get_frame_info,
    get_frame_size,
    finalize_dict,
    train_dict,
    CompressionParameter,
    DecompressionParameter,
    Strategy,
    ZstdFile,
)
_1K = 1024
DAT_130K_D = bytes([random.randint(0, 127) for _ in range(130*_1K)])
DAT_130K_C = compress(DAT_130K_D, options={CompressionParameter.checksum_flag:1})
with tempfile.NamedTemporaryFile(delete=False) as tmp_f:
            filename = pathlib.Path(tmp_f.name)
filename = pathlib.Path(tmp_f.name)
with tempfile.NamedTemporaryFile(delete=False) as tmp_f:
            filename = pathlib.Path(tmp_f.name)
filename = pathlib.Path(tmp_f.name)
with tempfile.NamedTemporaryFile() as tmp_f:
            filename = pathlib.Path(tmp_f.name)
filename = pathlib.Path(tmp_f.name)
with tempfile.NamedTemporaryFile(delete=False) as tmp_f:
            tmp_f.write(DAT_130K_C)
            filename = tmp_f.name
filename = tmp_f.name
with tempfile.NamedTemporaryFile(delete=False) as tmp_f:
            filename = pathlib.Path(tmp_f.name)
filename = pathlib.Path(tmp_f.name)
with tempfile.NamedTemporaryFile(delete=False) as tmp_f:
            filename = pathlib.Path(tmp_f.name)
filename = pathlib.Path(tmp_f.name)
with tempfile.NamedTemporaryFile(delete=False) as tmp_f:
            filename = pathlib.Path(tmp_f.name)
filename = pathlib.Path(tmp_f.name)
with tempfile.NamedTemporaryFile(delete=True) as tmp_f:
            filename = tmp_f.name
with tempfile.NamedTemporaryFile(delete=False) as tmp_f:
            TESTFN = pathlib.Path(tmp_f.name)
TESTFN = pathlib.Path(tmp_f.name)
open(TESTFN, "rb", newline="\n")
int('0', base=2**234)
import sys
import unittest.mock
from ast import literal_eval
from test import support
from test.support import import_helper
from test.support import os_helper
from test.support import warnings_helper
import socket
import time
import os
import pprint
import weakref
import functools
ssl = import_helper.import_module("ssl")
import _ssl
IS_OPENSSL_3_0_0 = ssl.OPENSSL_VERSION_INFO >= (3, 0, 0)
PROTOCOL_TO_TLS_VERSION = {}
for proto, ver in (
    ("PROTOCOL_SSLv3", "SSLv3"),
    ("PROTOCOL_TLSv1", "TLSv1"),
    ("PROTOCOL_TLSv1_1", "TLSv1_1"),
):
    try:
        proto = getattr(ssl, proto)
        ver = getattr(ssl.TLSVersion, ver)
    except AttributeError:
        continue
    PROTOCOL_TO_TLS_VERSION[proto] = ver
proto = getattr(ssl, proto)
CERTFILE = data_file("keycert.pem")
CAPATH = data_file("capath")
CAFILE_CACERT = data_file("capath", "5ed36f99.0")
with open(data_file('keycert.pem.reference')) as file:
    CERTFILE_INFO = literal_eval(file.read())
CERTFILE_INFO = literal_eval(file.read())
SIGNED_CERTFILE = data_file("keycert3.pem")
SIGNED_CERTFILE_HOSTNAME = 'localhost'
with open(data_file('keycert3.pem.reference')) as file:
    SIGNED_CERTFILE_INFO = literal_eval(file.read())
SIGNED_CERTFILE_INFO = literal_eval(file.read())
ALLSANFILE = data_file("allsans.pem")
NOKIACERT = data_file("nokia.pem")
NULLBYTECERT = data_file("nullbytecert.pem")
TALOS_INVALID_CRLDP = data_file("talos-2019-0758.pem")
with open("/etc/os-release", encoding="utf-8") as f:
            return "ubuntu" in f.read()
for ctx in ctxs:
            if (
                hasattr(ctx, "minimum_version") and
                ctx.minimum_version <= ssl.TLSVersion.TLSv1_1 and
                ctx.security_level > 1
            ):
                ctx.set_ciphers("@SECLEVEL=1:ALL")
protocol = getattr(ssl, protocol, None)
name = protocol.name
version = ssl.TLSVersion.__members__[version]
ctx = ssl.SSLContext(ssl.PROTOCOL_TLS_CLIENT)
with socket.socket() as s:
                ssl.SSLSocket(s)
proto = ssl.PROTOCOL_TLS_CLIENT
ctx = ssl.SSLContext(proto)
p = ssl._ssl._test_decode_cert(NOKIACERT)
p = ssl._ssl._test_decode_cert(TALOS_INVALID_CRLDP)
p = ssl._ssl._test_decode_cert(NULLBYTECERT)
s = ssl.OPENSSL_VERSION
s = socket.socket(socket.AF_INET)
ss = test_wrap_socket(s)
del ss
s = socket.socket(socket.AF_INET)
with test_wrap_socket(s) as ss:
            self.assertRaises(OSError, ss.recv, 1)
            self.assertRaises(OSError, ss.recv_into, bytearray(b'x'))
            self.assertRaises(OSError, ss.recvfrom, 1)
            self.assertRaises(OSError, ss.recvfrom_into, bytearray(b'x'), 1)
            self.assertRaises(OSError, ss.send, b'x')
            self.assertRaises(OSError, ss.sendto, b'x', ('0.0.0.0', 0))
            self.assertRaises(NotImplementedError, ss.dup)
            self.assertRaises(NotImplementedError, ss.sendmsg,
                              [b'x'], (), 0, ('0.0.0.0', 0))
            self.assertRaises(NotImplementedError, ss.recvmsg, 100)
            self.assertRaises(NotImplementedError, ss.recvmsg_into,
                              [bytearray(100)])
for timeout in (None, 0.0, 5.0):
            s = socket.socket(socket.AF_INET)
            s.settimeout(timeout)
            with test_wrap_socket(s) as ss:
                self.assertEqual(timeout, ss.gettimeout())
s = socket.socket(socket.AF_INET)
with test_wrap_socket(s) as ss:
                self.assertEqual(timeout, ss.gettimeout())
options = [
            ssl.OP_NO_TLSv1,
            ssl.OP_NO_TLSv1_1,
            ssl.OP_NO_TLSv1_2,
            ssl.OP_NO_TLSv1_3
        ]
protocols = [
            ssl.PROTOCOL_TLSv1,
            ssl.PROTOCOL_TLSv1_1,
            ssl.PROTOCOL_TLSv1_2,
            ssl.PROTOCOL_TLS
        ]
versions = [
            ssl.TLSVersion.SSLv3,
            ssl.TLSVersion.TLSv1,
            ssl.TLSVersion.TLSv1_1,
        ]
for option in options:
            with self.subTest(option=option):
                ctx = ssl.SSLContext(ssl.PROTOCOL_TLS_CLIENT)
                with self.assertWarns(DeprecationWarning) as cm:
                    ctx.options |= option
                self.assertEqual(
                    'ssl.OP_NO_SSL*/ssl.OP_NO_TLS* options are deprecated',
                    str(cm.warning)
                )
ctx = ssl.SSLContext(ssl.PROTOCOL_TLS_CLIENT)
with self.assertWarns(DeprecationWarning) as cm:
                    ctx.options |= option
for protocol in protocols:
            if not has_tls_protocol(protocol):
                continue
            with self.subTest(protocol=protocol):
                with self.assertWarns(DeprecationWarning) as cm:
                    ssl.SSLContext(protocol)
                self.assertEqual(
                    f'ssl.{protocol.name} is deprecated',
                    str(cm.warning)
                )
with self.assertWarns(DeprecationWarning) as cm:
                    ssl.SSLContext(protocol)
for version in versions:
            if not has_tls_version(version):
                continue
            with self.subTest(version=version):
                ctx = ssl.SSLContext(ssl.PROTOCOL_TLS_CLIENT)
                with self.assertWarns(DeprecationWarning) as cm:
                    ctx.minimum_version = version
                version_text = '%s.%s' % (version.__class__.__name__, version.name)
                self.assertEqual(
                    f'ssl.{version_text} is deprecated',
                    str(cm.warning)
                )
ctx = ssl.SSLContext(ssl.PROTOCOL_TLS_CLIENT)
with self.assertWarns(DeprecationWarning) as cm:
                    ctx.minimum_version = version
sock = socket.socket()
ctx = ssl.SSLContext(ssl.PROTOCOL_TLS_SERVER)
s = socket.create_server(('127.0.0.1', 0))
c = socket.socket(socket.AF_INET)
with test_wrap_socket(c, do_handshake_on_connect=False) as ss:
            with self.assertRaises(ValueError):
                ss.get_channel_binding("unknown-type")
s = socket.socket(socket.AF_INET)
with test_wrap_socket(s) as ss:
            self.assertIsNone(ss.get_channel_binding("tls-unique"))
s = socket.socket(socket.AF_INET)
with test_wrap_socket(s, server_side=True, certfile=CERTFILE) as ss:
            self.assertIsNone(ss.get_channel_binding("tls-unique"))
trust_oids = set()
for storename in ("CA", "ROOT"):
            store = ssl.enum_certificates(storename)
            self.assertIsInstance(store, list)
            for element in store:
                self.assertIsInstance(element, tuple)
                self.assertEqual(len(element), 3)
                cert, enc, trust = element
                self.assertIsInstance(cert, bytes)
                self.assertIn(enc, {"x509_asn", "pkcs_7_asn"})
                self.assertIsInstance(trust, (frozenset, set, bool))
                if isinstance(trust, (frozenset, set)):
                    trust_oids.update(trust)
store = ssl.enum_certificates(storename)
for element in store:
                self.assertIsInstance(element, tuple)
                self.assertEqual(len(element), 3)
                cert, enc, trust = element
                self.assertIsInstance(cert, bytes)
                self.assertIn(enc, {"x509_asn", "pkcs_7_asn"})
                self.assertIsInstance(trust, (frozenset, set, bool))
                if isinstance(trust, (frozenset, set)):
                    trust_oids.update(trust)
val = ssl._ASN1Object.fromname('TLS Web Server Authentication')
self.cert_time_ok("Jan  5 09:34:61 2018 GMT", 1515144901)
cases = [b'\x80', b'\xBF', b'\xC0', b'\xC1', b'\xF5', b'\xF6', b'\xFF']
cases.extend((b'\xE0\x80', b'\xE0\x9F', b'\xED\xA0\x80',
                      b'\xED\xBF\xBF', b'\xF0\x80', b'\xF0\x8F', b'\xF4\x90'))
