@extends('Email::layout')
@section('content')
    <div class="b-container">
        <div class="b-panel">
            <b>Dear Contractor ,</b>
            
            
<p>
    <?= $content ?>
</p>            
<br><br>
Regards
<br>
<b><?= $from ?></b><br>
<small>Retail Client</small><br>
<span><?= $phone ?></span>
            
            
        </div>
    </div>
@endsection
