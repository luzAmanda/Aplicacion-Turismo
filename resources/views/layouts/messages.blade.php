<div class="alert-icon shadow-inner wrap-alert-b">
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                <a><strong>Exitoso! </strong>{{ $message }}</a>
            </div>
    @endif
    @if(count($errors)>0)
        @foreach($errors->all() as $error)            
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                <a><strong>Lo sentimos! </strong> {{ $error }}</a>
            </div>
        @endforeach
    @endif
</div>
