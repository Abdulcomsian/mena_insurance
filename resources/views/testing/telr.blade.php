{{--<form action="https://secure.innovatepayments.com/gateway/index.html"--}}
{{--      method="post"></form>--}}
<form action="https://secure.telr.com/gateway/order.json"
      method="post">
    <input name="ivp_method" type="text" value="create"><br>
    <input name="ivp_store" type="text" value="26075"><br>
    <input name="ivp_authkey" type="text" value="11f01e2eMgskkV$7C9z54XPg"><br>
    <input name="ivp_amount" type="text" value="19.95"><br>
    <input name="ivp_currency" type="text" value="AED"><br>
    <input name="ivp_test" type="text" value="0"><br>
    <input name="ivp_timestamp" type="text" value="1293002624"><br>
    <input name="ivp_cart" type="text" value="ABC123"><br>
    <input name="ivp_desc" type="text" value="Items"><br>
    <input name="return_auth" type="text" value="http://127.0.0.1:8000/"><br>
    <input name="return_decl" type="text" value="http://127.0.0.1:8000/"><br>
    <input name="return_can" type="text" value="http://127.0.0.1:8000/"><br>
{{--    <input name="ivp_signature" type="text"--}}
{{--           value="bc8113029c18be34a673f2e28ae0c6db5bf9b734"><br>--}}
    <input type="submit" value="Purchase">
</form>
