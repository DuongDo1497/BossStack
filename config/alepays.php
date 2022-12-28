<?php

return [

    "apiKey" => "BHwRikyqEhVPv0hozqXlaXLvdrUF79", //Là key dùng để xác định tài khoản nào đang được sử dụng.
    "encryptKey" => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCCvMNctyN1JyCM7Lp1e9a35/yZn8LVzGGC08EXKq+CVq3/C7ao771OVFQ1+E+OFTmRfCfTs+BkJPGlGWC+ktpk/oMKI+4oMP/R1W2kP1cPGe0LPMc1KsczsG4JDFZ4kBZJm0SmXoFo1XTMojt36WK/6/fIVLnUnaxsP0nBOlE0mwIDAQAB", //Là key dùng để mã hóa dữ liệu truyền tới Alepay.
    "checksumKey" => "FRxan2odspMHcN7JbNUoN21ZUoxUyR", //Là key dùng để tạo checksum data. 
    "test" => "https://alepay-v3-sandbox.nganluong.vn/api/v3/checkout/",
    "live" => "https://alepay-v3.nganluong.vn/api/v3/checkout/",
    "url_request_payment" => "https://alepay-v3-sandbox.nganluong.vn/api/v3/checkout/request-payment",
    "url_get_transaction_info" => "https://alepay-v3-sandbox.nganluong.vn/api/v3/checkout/get-transaction-info",                  
];