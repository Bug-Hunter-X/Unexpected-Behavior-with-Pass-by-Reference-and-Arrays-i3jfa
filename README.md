# PHP Pass-by-Reference Bug

This repository demonstrates a common pitfall in PHP involving pass-by-reference and arrays.  The `increment` function is intended to increment a variable's value. While it works correctly with scalar values, it fails to increment array elements as expected. This is because pass-by-reference in this case modifies the array pointer, not the array's contents.

This example highlights a subtle difference between how pass-by-reference behaves with scalar types versus arrays.