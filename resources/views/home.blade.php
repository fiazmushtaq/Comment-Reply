@extends('layouts.app')

@section('content')
<h3
    style="background-color: rgba(1, 43, 63, 1); color:rgb(255, 255, 255); text-align: center; margin:-0.4px 0;border-radius: 0 0 50% 50% / 0 0 15px 15px;font-size: 30px;">
    CodeX Computer Zone</h3>

    <!-- Comment section -->
        <div class="comment-section">
            <h3>Leave a Comment</h3>
            <textarea id="commentInput" placeholder="Type your comment here..."></textarea>
            <button  onclick="addComment()">Submit</button>
            <div id="commentList"></div>
        </div>


@endsection