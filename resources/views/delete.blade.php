@extends('layouts.app')

@section('content')

<?php
DB::delete('delete from question <?=$t->id?>');
?>
<?php
DB::delete('delete from tasks <?=$t->id?>');
?>

@endsection
