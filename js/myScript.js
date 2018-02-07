$(document).ready(function () {
    
var vegetablesOption = ['<option required="required"></option>',
                  
                        '<option value="Огірок">Огірок (30 грн./кг)</option>',
                        '<option value="Баклажан">Баклажан (10 грн./кг)</option>',
                        '<option value="Капуста молода">Капуста молода (10 грн./кг)</option>',
                        '<option value="Капуста цвітна">Капуста цвітна (50 грн./кг)</option>',
                        '<option value="Капуста стара">Капуста стара (6 грн./кг)</option>',
                  
                        '<option value="Картопля">Картопля (5 грн./кг)</option>',
                        '<option value="Картопля молода">Картопля молода (13 грн./кг)</option>',
                        '<option value="Лук перо">Лук перо (20 грн./кг)</option>',
                        '<option value="Цибуля біла">Цибуля біла (13 грн./кг)</option>',
                        '<option value="Морква молода">Морква молода (14 грн./кг)</option>',
                  
                        '<option value="Морква стара">Морква стара (4 грн./кг)</option> ',
                        '<option value="Перець гіркий">Перець гіркий (65 грн./кг)</option>',
                        '<option value="Перець червоний">Перець червоний (104 грн./кг)</option>',
                        '<option value="Перець жовтий">Перець жовтий (104 грн./кг)</option>',
                        '<option value="Редька">Редька (15 грн./кг)</option>',
                  
                        '<option value="Буряк">Буряк (8 грн./кг)</option>',
                        '<option value="Селера">Селера (20 грн./кг)</option>',
                        '<option value="Томат">Томат (16 грн./кг)</option>',
                        '<option value="Томат сливка">Томат сливка (30 грн./кг)</option>',
                        '<option value="Томат рожевий">Томат рожевий (35 грн./кг)</option>',
                  
                        '<option value="Кріп">Кріп (50 грн./кг)</option>',
                        '<option value="Часник">Часник (120 грн./кг)</option>'
                    ];

var vegetablesValue = [ 'Огірок','Баклажан','Капуста молода','Капуста цвітна','Капуста стара',
                        'Картопля','Картопля молода','Лук перо','Цибуля біла','Морква молода',
                        'Морква стара','Перець гіркий','Перець червоний','Перець жовтий','Редька',
                        'Буряк','Селера','Томат','Томат сливка','Томат рожевий',
                        'Кріп','Часник'
                      ];

var vegetablesPrice = ['30','10', '10', '50', '6',
                       '5', '13', '20', '13', '14',
                       '4', '65', '104','104','15',
                       '8', '20', '16', '30', '35',
                       '50','120'
                      ];

var fruitsOption = [  '<option required="required"></option>',
                      '<option value="Вишня">Вишня (40 грн./кг)</option>',
                      '<option value="Полуниця">Полуниця (30 грн./кг)</option>',
                      '<option value="Малина">Малина (38 грн./кг)</option>'
                   ];
    
var fruitsValue = ['Вишня','Полуниця','Малина'];
var fruitsPrice = ['40','30','38'];
    
    
//отображаем списки fruits и vegetablesl
$("select").change(function(){
    if($(this).val() == "Фрукти"){

        $('#product_name').html(fruitsOption);
        $('#price').val(null);

    }else if($(this).val() == "Овочі"){

        $('#product_name').html(vegetablesOption);
        $('#price').val(null);

    }
});
    
    
//отобразить цену за fruits и цена за кг
$("select").change(function(){
    for (var i = 0; i < fruitsValue.length; i++ ){
        if($(this).val() == fruitsValue[i]){
            
            $('#price').val(fruitsPrice[i]);
            
            $('#span_priceTwo').text(fruitsPrice[i]);
            
           
        }
    }  
});
//отобразить цену за vegetables и цена за кг
$("select").change(function(){
    for (var i = 0; i < vegetablesValue.length; i++ ){
        if($(this).val() == vegetablesValue[i]){
            
            $('#price').val(vegetablesPrice[i]);
            
            $('#span_priceTwo').text(vegetablesPrice[i]);
            
        }
    }  
});

//цена за указанное количество кг

$("select").change(function(){
    for (var i = 1; i <= 50; i++ ){
        if($(this).val() == i){

            var input_price = $('#span_priceTwo').text();
            $('#span_priceOne').text('Ціна за '+i +' кг.');
            
            
            $('#price').val(i* input_price);

        }
    }
});
    

});




