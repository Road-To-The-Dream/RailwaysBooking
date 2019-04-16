<h4>Введите данные пассажиров</h4>
<p class="text-danger">Обязательно введите фамилию и имя пассажира, который будет осуществлять поездку.
    Изменение фамилии и имени после совершения оплаты проездных документов НЕВОЗМОЖНО.</p>
<p class="text-danger" id="errors-place"></p>
<div class="card">
    <div class="card-header">
        Пассажир 1
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-3 mt-2">
                        <p class="font-weight-bold">Поезд 375К, вагон 3, место 2</p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <input class="form-control" type="text" placeholder="Фамилия">
                    </div>
                    <div class="col-3">
                        <input class="form-control" type="text" placeholder="Имя">
                    </div>
                    <div class="ml-5 col-3">
                        <label for="">Льготы:</label>
                        @for($i = 0; $i <= 2; $i++)
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input privilege" id="privilege{{ $i }}"
                                               type="radio"
                                               name="privilege" value="Льгота{{ $i }}">
                                        <label class="custom-control-label"
                                               for="privilege{{ $i }}">Льгота{{ $i }}</label>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".privilege").on("click", function () {

        });
    })
</script>