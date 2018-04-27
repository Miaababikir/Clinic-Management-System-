<script>
    @if(count($errors->all()))
        @foreach($errors->all() as $error)
            $.toast({
                heading: '{{Session::get('error')}}',
                text: '',
                position: 'top-right',
                loaderBg:'#fb9678',
                icon: 'warning',
                hideAfter: 3500,
                stack: 6
            });
        @endforeach
    @endif

    @if(Session::has('error'))
        $.toast({
            heading: '{{Session::get('error')}}',
            text: '',
            position: 'top-right',
            loaderBg:'#fb9678',
            icon: 'warning',
            hideAfter: 3500,
            stack: 6
        });
    @elseif(Session::has('success'))
        $.toast({
            heading: '{{Session::get('success')}}',
            text: '',
            position: 'top-right',
            loaderBg:'#00c292',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    @endif
</script>