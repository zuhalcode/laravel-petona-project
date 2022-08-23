<!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-ATOGgTOqyCOX2dDo"></script>
<!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

<script>
    window.snap.pay('{{ $snap_token }}', {
        onSuccess: function(result) {
            console.log(result);
        },
        onPending: function(result) {
            // redirect
            window.location.href = "/";
        },
        onError: function(result) {
            window.location.href = "/";
        }
    });
</script>
