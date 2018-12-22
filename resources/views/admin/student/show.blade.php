@extends('layouts.admin')
@section('title')
{{$student->firstname.' '.$student->lastname}}
@endsection

@section('subtitle')

@endsection

@section('styles')

<style>
    .emp-profile{
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
    .profile-head h5{
        color: #333;
    }
    .profile-head h6{
        color: #0062cc;
    }
    .profile-edit-btn{
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }
</style>

@endsection
@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Information et Formations</h3>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                <img src="{{asset('images\students\\').$student->image}}" style="width:200px" alt="" />
                <div class="file btn btn-lg btn-primary">
                    Change Photo
                    <form action="{{route('students.upload',$student->id)}}" id="upform" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="imgbtn" name="image" />
                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-8" style="font-size:2rem">

            <h4>List de formations enregistrer : <button type="button" class="btn btn-success" data-toggle="modal"
                    data-target="#myModal"> <i class="fa fa-plus"></i> </button></h4>

            <ul>
                @foreach ($student->formations as $formation)
                <li>
                    <form action="{{route('students.removeformation',$student->id)}}" method="post">
                        {{$formation->name}} - Du <strong>{{$formation->pivot->start}}</strong>
                        Jusqu'a <strong>{{$formation->pivot->finnish.' || '}}</strong>

                        @csrf
                        <input type="hidden" name="formation_id" value="{{$formation->id}}">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>

                    </form>
                </li>
                @endforeach
            </ul>

        </div>

        <div class="col-md-12">
            
        </div>
    </div>


</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form action="{{route('students.addformation',$student->id)}}" method="POST">
            @csrf
        
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Formations</label>
                    <select name="formation_id" class="form-control select2" style="width: 100%;">
                        <option selected="selected" disabled>choississez une formation</option>
                        @foreach ($formations as $formation)
                        <option value="{{$formation->id}}">{{$formation->name.' - prix : '.$formation->price.' DH'}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="start">Debut de formation le :</label>
                            <input type="text" class="form-control" name="start" placeholder="ex.10/02/2017" >
                        </div>
                        <div class="col-md-6">
                            <label for="start">Fin de formation le :</label>
                            <input type="text" class="form-control" name="finnish" placeholder="ex.10/02/2018" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                <input type="submit" class="btn btn-success" value="Valider"/>
            </div>
        </div>
        </form>
    </div>
</div>


@endsection

@section('scripts')
<script>
    document.getElementById("imgbtn").onchange = function () {
        document.getElementById("upform").submit();
    };

    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    })

</script>
@endsection
