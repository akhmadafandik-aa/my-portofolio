@if ($errors->any())
    <div id="msg-eror" class="alert alert-danger p-2" style="margin-left: 20px; margin-right: 20px;">
        <ul>
            @foreach ($errors->all() as $item)
            <li style="color: #c50101; font-family: 'Poppins', sans-serif;">{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('success'))
    <div id="msg-success" class="alert alert-success p-2"style="margin-left: 20px; margin-right: 20px; color: #176168; font-family: 'Poppins', sans-serif;">
        {{ Session::get('success') }}
    </div>
@endif