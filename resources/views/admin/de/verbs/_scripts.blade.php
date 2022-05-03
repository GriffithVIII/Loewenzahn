<script type="text/javascript">
        let verbs_de = @json($verbs_de);
        
            function showChild($id){
                var buttonId = "childButton" + $id;
                var tableId = "tableId" + $id;
                let buttonTar = document.getElementById(buttonId);
            //Column::make('1p_s')->title('1st Singular'),
            //Column::make('2p_s')->title('2nd Singular'),
            //Column::make('3p_s')->title('3th Singular'),
            //Column::make('1p_p')->title('1st Plural'),
            //Column::make('2p_p')->title('2nd Plural'),
            //Column::make('3p_p')->title('3th Plural'),
            //Column::make('formel')->title('Formel'),
            //Column::make('2p_s_imperative')->title('2nd Imperative Singular'),
            //Column::make('1p_p_imperative')->title('1st Imperative Plural'),
            //Column::make('2p_p_imperative')->title('2nd Imperative Plural'),
            //Column::make('formel_imperative')->title('Formel Imperative'),
                FixId = verbs_de.findIndex(verbs_de => verbs_de.id === $id);
                let Fp_s = verbs_de[FixId]["1p_s"];
                let Sp_s = verbs_de[FixId]["2p_s"];
                let Tp_s = verbs_de[FixId]["3p_s"];
                let Fp_p = verbs_de[FixId]["1p_p"];
                let Sp_p = verbs_de[FixId]["2p_p"];
                let Tp_p = verbs_de[FixId]["3p_p"];

                var Preterite = verbs_de[FixId]["preterite"];
                let KonjunktivII = verbs_de[FixId]["konjunktiv_ii"];

                let Sp_s_i = verbs_de[FixId]["2p_s_imperative"];
                let Fp_p_i = verbs_de[FixId]["1p_p_imperative"];
                let Sp_p_i = verbs_de[FixId]["2p_p_imperative"];
                let Formel_i = verbs_de[FixId]["formel_imperative"];
                
                let EndTh = "en";
                if(Preterite.slice(-1) == "e"){
                    EndTh = "n";
                }

                let template =      ['<tr>'+
                                        '<td>'+ "ich" +'</td>'+
                                        '<td>'+ Fp_s +'</td>'+
                                        '<td>'+ Preterite +'</td>'+
                                        '<td>'+ "-" +'</td>'+
                                        '<td>'+ KonjunktivII +'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                    '</tr>',
                                    '<tr>'+
                                        '<td>'+ "du" +'</td>'+
                                        '<td>'+ Sp_s+'</td>'+
                                        '<td>'+ Preterite + "st" +'</td>'+
                                        '<td>'+ "-" +'</td>'+
                                        '<td>'+ KonjunktivII + "st" +'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+ Sp_s_i +'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                    '</tr>',
                                    '<tr>'+
                                        '<td>'+ "er/​sie/​es" +'</td>'+
                                        '<td>'+ Tp_s +'</td>'+
                                        '<td>'+ Preterite +'</td>'+
                                        '<td>'+  "-" +'</td>'+
                                        '<td>'+ KonjunktivII +'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                    '</tr>',
                                    '<tr>'+
                                        '<td>'+ "wir" +'</td>'+
                                        '<td>'+ Fp_p+'</td>'+
                                        '<td>'+ Preterite + EndTh +'</td>'+
                                        '<td>'+ "-" +'</td>'+
                                        '<td>'+ KonjunktivII + "n" +'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+ Fp_p_i +'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                    '</tr>',
                                    '<tr>'+
                                        '<td>'+ "ihr" +'</td>'+
                                        '<td>'+ Sp_p+'</td>'+
                                        '<td>'+ Preterite + "t" +'</td>'+
                                        '<td>'+ "-" +'</td>'+
                                        '<td>'+ KonjunktivII + "t" +'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+ Sp_p_i +'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                    '</tr>',
                                    '<tr>'+
                                        '<td>'+ "sie/Sie" +'</td>'+
                                        '<td>'+ Tp_p+'</td>'+
                                        '<td>'+ Preterite + EndTh +'</td>'+
                                        '<td>'+ "-" +'</td>'+
                                        '<td>'+ KonjunktivII + "n" +'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+ Formel_i +'</td>'+
                                        '<td>'+'</td>'+
                                        '<td>'+'</td>'+
                                    '</tr>'];
                let checkExists = document.getElementById(tableId);
                if(checkExists==null){
                    for(var i = template.length - 1; i >= 0; i--){
                        let container = document.getElementById($id);
                        let table = document.createElement('tr');

                        table.style = "background-color: orange";
                        table.innerHTML = template[i];
                        table.id = tableId;
                        container.after(table);
                    }
                }
                else{
                    for(var i = 0; i < template.length; i++){
                        let table = document.getElementById(tableId);
                        table.remove();
                    } 
                }
                
            }            
    </script>