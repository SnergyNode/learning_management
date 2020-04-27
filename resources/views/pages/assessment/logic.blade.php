<script>
    "use strict";
    let timer = $('.tk-countdown');
    let min = timer.attr('data-val');
    console.log(min + " Minutes");
    if(parseInt(min) === 0){
        timer.append("<p style='text-align: center; font-size: 18px; margin-top: 10px'>Not Timed</p>");
    }else{


        $.fn.tkCountdown = function () {
            this.countdown({
                until: moment().add(min, 'minute').toDate()
            });
        };
        timer.tkCountdown();

        unixPlusMin(parseInt(min));
    }



    let current = 0;
    let current_qst = $('.current_index');

    function prevQst(num, total) {
        if(current>0){
            let cur_elem = $('.show_'+num);
            let prev_elem = $('.show_'+(parseInt(num)-1));
            cur_elem.hide();
            prev_elem.show();
            current -= 1;

            if(current===0){
                $('.btn_prev').hide();
                current_qst.text(1)
            }else{
                current_qst.text(current+1)
            }



            if(current < (parseInt(total)-1)){
                $('.btn_next').show();
                $('.btn_submit').hide();
            }
        }

        console.log("viewing question "+ current);
    }

    function nextQst(num, total) {
        let cur_elem = $('.show_'+num);
        let next_elem = $('.show_'+(parseInt(num)+1));
        cur_elem.hide();
        next_elem.show();

        $('.btn_prev').show();
        current += 1;

        current_qst.text(current+1)

        if(current >= (parseInt(total)-1)){
            $('.btn_next').hide();
            $('.btn_submit').show();
        }

        console.log("viewing question "+ current);
    }

    function unixPlusMin(min) {

        //get unix timestamp
        let unix = Math.round(new Date().getTime()/1000);
        console.log(min);

        //convert minutes to seconds for merging with unix timestamp
        min = 60*60*min;
        console.log(min);

        //update end time to unix timestamp
        let eventTime = unix+min;

//        var duration = moment().add(10, 'minute').toDate()
        let diffTime = eventTime - unix; //better to handle this in Controller to avoid timezone problem
        let global_duration = moment.duration(diffTime, 'seconds');
        let interval = 1; //value decrement every interval

        let gmin = global_duration.asMinutes();
        var interval_fn = setInterval(function () {

            gmin -= interval;
            let duration = moment.duration(gmin, 'seconds');

            if(duration.asMinutes() > 0){

                console.log(duration.asMinutes() + " duration as minutes");

                // .format()
                let sec2 = duration.days() + 'd:' + duration.hours() + 'h:' + duration.minutes() + 'm:' + duration.seconds() + 's';
                console.log(sec2);

            }else{
                clearInterval(interval_fn);
                alert('Your Time is Up! your test will now be automatically submitted.');
            }

        }, 1000);
    }

</script>