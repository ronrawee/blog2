@extends('main')

@section('title', '| Contact')

@section('content')
<div class="row">
    <div class="col-md-12">

        <h1>Contact Me</h1>

        <hr>

        <form action="" method="POST" role="form">

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="10">Type your message here...</textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>




    </div>
</div>
@endsection
      