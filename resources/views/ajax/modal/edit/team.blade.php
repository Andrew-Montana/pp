<div class="modal fade" id="modal-block" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Создание команды</h4>
            </div>
            <div class="modal-body">

                <form role="form6" action="workspace/team">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="name">Название:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="about">Описание:</label>
                        {{--<textarea class="form-control" rows="5" id="about" name="about"></textarea>--}}
                        {{--<textarea id="about" name="about" class="form-control" placeholder="Enter text ..." rows="5" style="width: 100%;"></textarea>--}}

                        @include('workspace.forms.text-editor')

                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label><input checked name="visible" type="checkbox">Публичная команда</label>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" data-action="modal-submit" class="btn btn-primary">Создать</button>
            </div>
        </div>
    </div>
</div>