@extends('_layouts.app')

@section('content')
    <h1>Nouvel évènement</h1>
    <form action="{{route('user.events.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <div class='input-group date' id='start_date'>
                <label for="start_date">Date début</label>
                <input type="text" class="form-control" name="start_date">
                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
        </div>
        <div class="form-group">
            <div class='input-group date' id='end_date'>
                <label for="end_date">Date fin </label>
                <input type="text" class="form-control" name="end_date">
                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description"></textarea>
        </div>
        <button type="submit" value="Créer" class="btn btn-success">Créer</button>
    </form>
@endsection

@section('style')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"/>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/fr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
        var config = {format: 'YYYY-MM-DD HH:mm:SS'}
        $(function () {
            $('#start_date').datetimepicker(config);
            $('#end_date').datetimepicker(config);
        });
    </script>
@endsection