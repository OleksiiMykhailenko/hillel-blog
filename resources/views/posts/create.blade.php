<?php
        @extends('layouts.layout')
@section('content')

    <form action="">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </div>

        <div class="form-group">
            <label for="intro">Intro:</label>
            <textarea type="text" name="intro" id="intro"></textarea>
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea type="text" name="body" id="body"></textarea>
        </div>
    </form>

    @endsection