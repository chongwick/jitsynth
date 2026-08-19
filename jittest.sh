php -d opcache.enable_cli=1 \
    -d opcache.jit=tracing \
    -d opcache.jit_buffer_size=64M \
    -d opcache.jit_hot_func=2 \
    -d opcache.jit_hot_loop=255 \
    jittest.php
#php -d opcache.enable_cli=1 \
#    -d opcache.jit=tracing \
#    -d opcache.jit_hot_func=2 \
#    -d opcache.jit_hot_loop=2 \
#    jittest.php
