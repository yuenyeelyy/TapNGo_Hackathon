<?php
$accountSettings = array(
    "merchantName" => "test",
    "appId" => "4247029993",
    "apiKey" => "IsrU8rk9sIkxLmVkb/PhqMjl5NTjMBj7gFLMmkasYMK9+QKymWxQhAKQOBVEhf0OVOBw/h083ohgahUBlBiNhQ==",
    "publicKey" => "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAhrXpOT7esRpzMtibAgGI/Le8KZJAYDm1KhvqyDNtLY6sVD94fxrIlxYBx0ie9x8Fh6UVC+YrGDkb3qNH5asYDQrn8UDEN1GSkW+VwkdZyakGARfNdrAKdT6khyk48wYuXGOQcj4UgwjsVOT9OcVRfMXoKk20Mz9rhDZ82m9HTgGc5MUbICrpIko7wqnAJdvQZ9U5eWv3mH/IXMe472iEMJiWlNP0msusg7mqtrIY6bX6qhYgj8kp6ql4BAoiTLC1WgY/o7hr0C8Fqb6p9WWYZsUTTCcFfhjdopsSnUr0XwfunzS1UGg6VQxpLbYGGshazkN38IK1Rd2S8DkTs60oNyE16N2MmGaFrnyV/kJgsVg8+Qoc0E02mD0uECLKA8Hp/IH7dVrgpFbcIuYEvD26jFdjVvAK/s5Sy/o/AG+rub+v6S/kDVnITuM2hgp1ElusRZJB2mDxh7nmnPhwUBOyliuSYEa2otxyFvkr99SZ9xK2tVq6RwHaXxR5soFxsNdykNvsHVntGLJEL8wsHKiVcpzR8eGaXfrDU+g0AyiHsXk3zDe7e+eO4Qb4Cnl9WKrk9jRgjj07gTGMnsU8ChPIZaqGNfE776ZJDrEZe0VAMvOY8Y02QeNhgptpbkfuNWx0DTFOkMN5eGpRLNwkuzO5rAUpR3zZZExFvwR9dEp+rUECAwEAAQ==",
    "queryTxnUrl" => "https://gateway2.sandbox.tapngo.com.hk/paymentApi/payment/status",
    "paymentUrl" => "https://gateway2.sandbox.tapngo.com.hk/web/payments",
    "recurrentPaymentUrl" => "https://gateway2.sandbox.tapngo.com.hk/paymentApi/payment/recurrent",
    "invalidateTokenUrl" => "https://gateway2.sandbox.tapngo.com.hk/paymentApi/payment/recurrent/token/invalidation",
    "registerAccessTokenUrl" => "https://gateway2.sandbox.tapngo.com.hk/paymentApi/register/accessToken",
    "notifyUrl" => "",
    "returnUrl" => "http://localhost:8080/24/chamb/pairup_success.php",
    "batchGenHKQRUrl" => "https://gateway2.sandbox.tapngo.com.hk/paymentApi/create/batch/HKQR",
    "queryBatchHKQRStatusUrl" => "https://gateway2.sandbox.tapngo.com.hk/paymentApi/query/batch/HKQR/status",
    "downloadBatchHKQRStatusUrl" => "https://gateway2.sandbox.tapngo.com.hk/paymentApi/download/batch/HKQR",
    "queryTxnHistoryUrl" => "https://gateway2.sandbox.tapngo.com.hk/paymentApi/query/transaction/history",
    "downloadTxnHistoryUrl" => "https://gateway2.sandbox.tapngo.com.hk/paymentApi/download/tansaction/history"
);

$accountList = array($accountSettings);

?>