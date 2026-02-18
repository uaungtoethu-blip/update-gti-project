<div class="d-flex justify-content-center align-items-center">
    <div {{$attributes->merge(['class'=>'card rounded shadow-lg mb-4 h-auto'])}} style="width: 18rem; margin-top:80px">
        <div class="card-body">
            {{$slot}}
        </div>
    </div>
</div>