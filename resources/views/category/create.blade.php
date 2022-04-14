<form action="{{ url('/category') }}" method="post">
    @csrf
    @include('category.form')
</form>