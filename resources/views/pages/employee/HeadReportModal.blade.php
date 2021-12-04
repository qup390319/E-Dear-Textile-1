<div class="modal fade" id="HeadReportModal" tabindex="-1" role="dialog" aria-labelledby="HeadReportModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="HeadReportModalLongTitle">折頭-回報任務</h5>
                <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row form-group">
                        <label for="head_ticket_id" class="col-sm-3 col-5 ">派遣單編號</label>
                        <input class="form-control col-sm-8 col-7" id="head_ticket_id" type="text" readonly/>
                    </div>
                    <div class="row form-group">
                        <label for="head_customer_name" class="col-sm-3 col-5 ">客戶名稱</label>
                        <input class="form-control col-sm-8 col-7" id="head_customer_name" type="text" readonly/>
                    </div>
                    <div class="row form-group">
                        <label for="head_color_cable" class="col-sm-3 col-5 ">色線編號</label>
                        <input class="form-control col-sm-8 col-7" id="head_color_cable" type="text" readonly/>
                    </div>
                    <div class="row form-group">
                        <label for="head_wash_tag" class="col-sm-3 col-5 ">洗標</label>
                        <input class="form-control col-sm-8 col-7" id="head_wash_tag" type="text" readonly/>
                    </div>
                    <br>
                    <div class="row form-group">
                        <label class="col-sm-12 col-12">折頭員完成數量</label>
                        <div class="col-sm-12 col-12 row">
                            <input id="report-operator-name" class="form-control col-sm-11 col-11 mx-auto mb-2"
                                   value="折頭name" readonly/>
                        </div>
                        <div class="col-sm-12 col-12 row">
                            <input class="form-control col-sm-7 col-7 mx-auto" id="head_operator_num"
                                   placeholder="請輸入數量" type="text"/>
                            <select id="report-operator-unit" class="form-control col-sm-3 col-3 mx-auto">
                                <option value="one" selected>條</option>
                                <option value="dozen">打</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12 col-12">撿巾員完成數量</label>
                        <table id="head_report_list">
                            <tr class="col-sm-12 col-12 pick-row row">
                                <td class="pick-people col-sm-4 col-12 mr-auto mb-2 form-group">
                                    <select class="form-control pick-select">
                                        <option value="">撿巾員</option>
                                    </select>
                                </td>
                                <td class="pick-number col-sm-4 col-6 mx-auto mb-2 form-group">
                                    <input class="form-control " id="head_pick_complete_num"
                                           placeholder="數量" type="text"/>
                                </td>
                                <td class="pick-unit col-sm-4 col-6 ml-auto mb-2 form-group">
                                    <select class="form-control">
                                        <option value="" selected>單位</option>
                                        <option value="one">條</option>
                                        <option value="dozen">打</option>
                                    </select>
                                </td>

                            </tr>

                        </table>
                        <div class="col-sm-12 col-12 row">
                            <button class="btn col-sm-12 col-12 text-center btn-outline-info ml-autos"
                                    id="btn_add_picks">+
                            </button>
                        </div>
                    </div>

                    <br>
                    <div class="row form-group mx-auto">
                        <label for="head_time" class="col-sm-12 col-12">最後回報時間</label>
                        <input class="form-control col-sm-12 col-12" id="head_time" type="text" readonly/>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" id="btn_store_report">送出回報</button>
            </div>
        </div>
    </div>
</div>
<script>
    function open_head_modal(ticket_id) {
        url = "{{route('get_report_data')}}";
        $.ajax({
            url: url,
            method: 'GET',
            data: {
                ticket_id: ticket_id,
                action: '折頭',
            },
            success: function (res) {
                console.log(res);
                set_head_modal(res);
            },
            error: function (err) {
                console.log(err);
            }
        })
    }
        //設置回報頁欄位資訊
        function set_head_modal(data) {
            // //派遣單編號
            // document.getElementById('report_ticket_id').value =
            //     data['ticket_reports'][0]['ticket_id'];
            // //客戶名稱
            // document.getElementById('report_customer_name').value =
            //     data['ticket_reports'][0]['employeeName'];
            // //色線編號
            // document.getElementById('report_color_cable').value =
            //     data['ticket_reports'][0]['colorId'] + data['ticket_reports'][0]['colorId2'];
            // //洗標
            // document.getElementById('report_wash_tag').value =
            //     data['ticket_reports'][0]['wash'];
            //
            // //剪巾員名稱
            // document.getElementById('report-operator-name').value =
            //     data['ticket_reports'][0]['name'];
            // //剪巾員回報數量
            // document.getElementById('report_operator_num').value =
            //     data['ticket_reports'][0]['quantity'];
            // //剪巾員回報數量之單位
            // document.getElementById('report-operator-unit').value =
            //     data['ticket_reports'][0]['unit'];
            //
            // //最後回報時間
            // document.getElementById('report_time').value =
            //     data['ticket_reports'][0]['updated_at']
            //
            // //先把滾邊員列格式化
            // format_piping_row();
            //
            // //滾邊員選項填入
            // $(".piping-select").empty();
            // $.each(data['piping_members'], function (index, row) {
            //     $(".piping-select").append(
            //         "<option value=" + row['id'] + ">" + row['name'] + "</option>"
            //     );
            // })
            //
            // //設定動態產生用的空白列
            // temp_piping_row = $("#report_piping_list").html();
            //
            // //將資料寫入滾邊員列表內
            // let piping_last_row = $("#report_piping_list tr").last().children();
            // let piping_last_people = piping_last_row.children('.piping-people > select');
            // let piping_last_number = piping_last_row.children('.piping-number > input');
            // let piping_last_unit = piping_last_row.children('.piping-unit > select');
            //
            // //若piping_reports有資料則寫入
            // if (data["piping_reports"].length !== 0) {
            //     //因為第一列已經存在所以直接寫入資料
            //     piping_last_number.val(data["piping_reports"][0]["quantity"]);
            //     piping_last_unit.val(data["piping_reports"][0]["unit"]);
            //     for (let i = 1; i < data["piping_reports"].length; i++) {
            //         //產生新的一列
            //         create_piping_row();
            //         //重新定義最後一行
            //         piping_last_row = $("#report_piping_list tr").last().children();
            //         piping_last_people = piping_last_row.children('.piping-people > select');
            //         piping_last_number = piping_last_row.children('.piping-number > input');
            //         piping_last_unit = piping_last_row.children('.piping-unit > select');
            //         //寫入資料
            //         piping_last_people.val(data["piping_reports"][i]["operator"]);
            //         piping_last_number.val(data["piping_reports"][i]["quantity"]);
            //         piping_last_unit.val(data["piping_reports"][i]["unit"]);
            //
            //     }
            // }

            $("#HeadReportModal").modal('show');
        }





    //儲存回報結果
    function store_report_data() {
        let ticket_id = document.getElementById('report_ticket_id').value;
        let piping_list = get_piping_list_array();
        let operator_name = document.getElementById('report-operator-name').value;
        let operator_number = document.getElementById('report_operator_num').value;
        let operator_unit = document.getElementById('report-operator-unit').value;
        const d = new Date();

        $.ajax({
            url:'{{route('store_report_data')}}',
            method: 'GET',
            data: {
                ticket_id: ticket_id,
                piping_list: piping_list,
                action: '剪巾',
                operator_number: operator_number,
                operator_unit: operator_unit,
                updated_at:d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate()+" "+d.getHours()+":"+d.getMinutes()
            },
            success: function (res) {
                console.log(res);
                window.alert("回報完成");
                $("#CutReportModal").modal("hide");
            },
            error: function (err) {
                console.log(err);
            }
        })
    }

    //取得頁面中滾邊員回報資訊
    function get_piping_list_array() {
        let piping_people;
        let piping_number;
        let piping_unit;
        let piping_list = [];
        container = $("#report_piping_list tr").each(function (index, tr) {
            // console.log($(this).children().find());
            //滾邊員
            piping_people = $(this).find(".piping-people > select > option:selected").val();
            //數量
            piping_number = $(this).find(".piping-number > input").val();
            //單位
            piping_unit = $(this).find(".piping-unit > select > option:selected").val();

            //將資料push進array:piping_list裡面
            piping_list.push([piping_people, piping_number, piping_unit])
        });
        return piping_list;
    }

</script>



