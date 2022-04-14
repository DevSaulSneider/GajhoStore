<form action="{{ url('/category/'.$categoryData->id) }}" method="post">
    @csrf
    @include('category.form')
    {{ method_field('PATCH') }}
</form>