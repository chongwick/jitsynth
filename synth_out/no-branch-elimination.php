<?php
if (true) {
}
try {
    echo "*** Testing is_object() with valid objects ***\n";
} catch (Exception $e) {}
if (true) {
    class MySessionHandler implements SessionHandlerInterface {
        function open($save_path, $session_name): bool {
            return true;
        }
    
        function close(): bool {
            die("close: goodbye cruel world\n");
        }
    
        function read($id): string|false {
            return '';
        }
    
        function write($id, $session_data): bool {
            die("write: goodbye cruel world\n");
        }
    
        function destroy($id): bool {
            return true;
        }
    
        function gc($maxlifetime): int {
            return 1;
        }
    }
    session_set_save_handler(new MySessionHandler());
}
