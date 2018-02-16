<div class="modal fade" id="editTag" tabindex="-1" role="dialog" aria-labelledby="editTagLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editTagLabel">Edit Tag</h4>
      </div>
      <div class="modal-body">
          {!! Form::model($tag, ['route' => ['tags.update', $tag->slug], 'method' => 'PUT']) !!}
          <div class="form-group">
              {{Form::label('name', 'Name:')}}
              {{Form::text('name', $tag->name, ['class' => 'form-control'])}}
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::submit('Save Change', ['class' => 'btn btn-success'])}}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
