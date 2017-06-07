/*Populating content in the drop downs for Status and Positions*/

function dropdowns(ddl1, ddl2){
    var executive = ['-- Select one --', 'President', 'Vice President', 'Secretary General', 'Vice Secretary General', 'Publicity Secretary', 'Treasurer', 'Projects Coordinator', 'First Committee Member', 'Second Committee Member', 'Third Committee Member'];
    var executiveAlumni = ['-- Select one --', 'President', 'Vice President', 'Secretary General', 'Vice Secretary General', 'Publicity Secretary', 'Treasurer', 'Projects Coordinator', 'First Committee Member', 'Second Committee Member', 'Third Committee Member'];
    var ordinary = ['Not Applicable'];
    var ordinaryAlumni = ['Not Applicable'];

    switch(ddl1.value) {
        case '1':
            ddl2.options.length = 0;
            for (var i = 0;i < executive.length;i++ ) {
                createOption(ddl2,executive[i], i);
            }
            break;
        case '2':
            ddl2.options.length = 0;
            for (var i = 0;i < ordinary.length;i++) {
                createOption(ddl2, ordinary[i], i);
            }
            break;
        case '3':
            ddl2.options.length = 0;
            for (var i = 0;i < executiveAlumni.length;i++) {
                createOption(ddl2, executiveAlumni[i], i);
            }
            break;
        case '4':
            ddl2.options.length =0;
            for (var i = 0;i < ordinaryAlumni.length;i++) {
                createOption(ddl2, ordinaryAlumni[i], i);
            }
            break;
        default:
            ddl2.options.length = 0;
            break;

    }
}

function createOption(ddl, text, value){
    var opt = document.createElement('option');
    opt.value = value;
    opt.text = text;
    ddl.options.add(opt);
}

/*Populating content in the drop downs for Status and Positions*/
/* End */







