@extends('layouts.default')


@section('content')

    <div class="card at-3 pl-2 pr-2">
        <div class="card-title"><h1>Contacts</h1>
            <p class="lead">Please use this form to contact the site owner. </p></div>

        <div class="card-body">

            <form role="form" id="contact-form" class="contact-form" action="{{route('contact.store')}}" method="post">

                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" autocomplete="off" id="Name" placeholder="Name">
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="message" placeholder="Message"></textarea>
                            
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn main-btn pull-right">Submit</button>

            </form>
        </div>
    </div>

@endsection