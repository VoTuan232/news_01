<div class="modal fade" id="editTag" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ trans('language.update-tag') }}</h4>
            </div>
            {!! Form::open(array('route' => 'tags.update', 'id'=> "frm-update")) !!}
            <div class="modal-body">
                {{ Form::label('name', "Name") }}
                {{ Form::text('name', null, array('class'=>'form-control', 'id' => 'name-update')) }}
                {{ Form::hidden('id-update', null, array('class'=>'form-control', 'id' => 'id-update')) }}
                <br>
                <div class="alert" id="message-fail" style="display: none"></div>
                <p>{{ trans('language.question') }}</p>
            </div>
            <div class="modal-footer">
                {{ Form::submit(trans('language.yes'), array('class'=>'btn danger'))}}
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">{{ trans('language.no') }}</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

