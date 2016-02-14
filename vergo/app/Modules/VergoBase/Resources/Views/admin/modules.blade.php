@extends('vergo_base::admin.layouts.default')

{{-- Content --}}
@section('content')

    <div class="row">
        <div class="x_title">
            <h2>Модуль <small>управление модулями</small></h2>
            @include('vergo_base::admin.layouts.block.top_menu')
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <table id="collection" class="table table-striped responsive-utilities jambo_table">
                        <thead>
                        <tr class="headings">
                            <th>
                                <input type="checkbox" class="tableflat">
                            </th>
                            <th>Id</th>
                            <th width="30%">Название</th> <!-- тут бы поправить чутка -->
                            <th>Краткая информация</th>
                            <th>Версия</th>
                            <th>Статус</th>
                            <th class=" no-link last">
                                <span class="nobr">Действия</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($collection as $model)
                            <tr class="even pointer {{($model->version > $model->install_version) ? "info" : ""}}">
                                <td class="a-center ">
                                    <input name="{{$model->id}}" type="checkbox" class="tableflat">
                                </td>
                                <td class="">{{$model->id}}</td>
                                <td class="">{{$model->name}}</td>
                                <td class="">{{$model->info}}</td>
                                <td class="">{{$model->version}}</td>
                                <td class="">
                                    <span class=" {{$model->getStateClass()}}">
                                        {{($model->getStateName())}}
                                    </span>
                                </td>
                                <td class="last">
                                    <a class="btn btn-danger" href="#">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                    <a class="btn btn-success" href="#">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Datatables -->
    <script src="{{$app['vergo_base.assets']->getPath('js/lib/datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{$app['vergo_base.assets']->getPath('js/lib/datatables/tools/js/dataTables.tableTools.js')}}"></script>
    <script>
        $(document).ready(function(){
            PopUpHide();
        });
        $(document).ready(function () {
            $('input.tableflat').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });
        });

        function PopUpShow(){
            $("#popup1").show();
            $("#img1").setAttribute('src','g.jpg')

        }
        function PopUpHide(){
            $("#popup1").hide();
        }

        var asInitVals = new Array();
        $(document).ready(function () {
            var oTable = $('#collection').dataTable({
                "oLanguage": {
                    "sSearch": "Поиск по всех колонках:"
                },
                "aoColumnDefs": [
                    {
                        'bSortable': false,
                        'aTargets': [0]
                    } //disables sorting for column one
                ],
                'iDisplayLength': 12,
                "sPaginationType": "full_numbers",
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "{{$app['vergo_base.assets']->getPath('js/lib/datatables/tools/swf/copy_csv_xls_pdf.swf')}}"
                }
            });
            $("tfoot input").keyup(function () {
                /* Filter on the column based on the index of this element's parent <th> */
                oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
            });
            $("tfoot input").each(function (i) {
                asInitVals[i] = this.value;
            });
            $("tfoot input").focus(function () {
                if (this.className == "search_init") {
                    this.className = "";
                    this.value = "";
                }
            });
            $("tfoot input").blur(function (i) {
                if (this.value == "") {
                    this.className = "search_init";
                    this.value = asInitVals[$("tfoot input").index(this)];
                }
            });
        });
    </script>
@stop