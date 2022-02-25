@extends('layouts.app')


@section('content')
    <h1>PARTIE ADMIN BLOG</h1>

    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <h4 class="card-title">Feedback Form</h4>
                <p class="card-text">
                    Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet
                    roll. Toffee
                    sugar
                    plum sugar
                    plum jelly-o jujubes bonbon dessert carrot cake.
                </p>
                <form class="form" method="post">
                    <div class="form-body">
                        <div class="form-group">
                            <label for="feedback1" class="sr-only">Name</label>
                            <input type="text" id="feedback1" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="feedback4" class="sr-only">Last Game</label>
                            <input type="text" id="feedback4" class="form-control" placeholder="Last Name" name="LastName">
                        </div>
                        <div class="form-group">
                            <label for="feedback2" class="sr-only">Email</label>
                            <input type="email" id="feedback2" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <select name="reason" class="form-control">
                                <option value="Inquiry">Inquiry</option>
                                <option value="Complain">complaints</option>
                                <option value="Quotation">Quotation</option>
                            </select>
                        </div>
                        <div class="form-group form-label-group">
                            <textarea class="form-control" id="label-textarea" rows="3" placeholder="Suggestion"></textarea>
                            <label for="label-textarea"></label>
                        </div>
                    </div>
                    <div class="form-actions d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                        <button type="reset" class="btn btn-light-primary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection