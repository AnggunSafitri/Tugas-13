@foreach(['success', 'warning', 'danger'] as $status)
    @if(session($status))
        <div class="alert alert-{{$status}} alert-dismissable custom-{{$status}}-box">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p style="text-align: center">
                <strong> {{ session($status) }} </strong>
            </p>
        </div>
    @endif
@endforeach