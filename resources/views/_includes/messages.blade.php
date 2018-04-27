<script>
    @if(count($errors->all()))
        @foreach($errors->all() as $error)
        $.toast({
            heading: '{{Session::get('error')}}',
            text: '',
            position: 'top-center',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 3500,
            stack: 6
        });
    @endforeach
@endif

@if(Session::has('error'))
$.toast({
        heading: '{{Session::get('error')}}',
        text: '',
        position: 'top-center',
        loaderBg:'#ff6849',
        icon: 'error',
        hideAfter: 6000,
        stack: 6
    });
    @elseif(Session::has('success'))
        $.toast({
            heading: '{{Session::get('success')}}',
            text: '',
            position: 'top-center',
            loaderBg:'#ff6849',
            icon: 'success',
            hideAfter: 6000,
            stack: 6
        });
    @endif
</script>