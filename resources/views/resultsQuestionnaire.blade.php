@extends('welcome')
@section('content')
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="alternate" type="application/json+oembed"
          href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F210132406027439"
          title="oEmbed Form">
    <link rel="alternate" type="text/xml+oembed"
          href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F210132406027439"
          title="oEmbed Form">
    <meta property="og:title" content="Website Questionnaire Form">
    <meta property="og:url" content="https://form.jotform.com/210132406027439">
    <meta property="og:description" content="Please click the link to complete this form.">
    <meta name="slack-app-id" content="AHNMASS8M">
    <link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
    <link rel="canonical" href="https://form.jotform.com/210132406027439"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1"/>
    <meta name="HandheldFriendly" content="true"/>
    <title>Website Questionnaire Form</title>
    <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.22676"/>
    <link type="text/css" rel="stylesheet"
          href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
    <link type="text/css" rel="stylesheet"
          href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.22676"/>
    <link type="text/css" rel="stylesheet"
          href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.22676"/>
    <link type="text/css" rel="stylesheet"
          href="{{asset('front-end/toast.css')}}"/>
    <style type="text/css" id="form-designer-style">
        .form-textbox, .form-textarea {
            color: #2c3345;
        }

        .rating-item input:hover + label {
            color: rgba(106, 27, 0, 0.75);
        }

        li[data-type=control_fileupload] .qq-upload-button,
        .until-text,
        .form-submit-reset {
            color: rgba(106, 27, 0, 0.75);
        }

        .stageEmpty.isSmall {
            color: rgba(106, 27, 0, 0.75);
        }

        .rating-item label {
            color: rgba(106, 27, 0, 0.75);
        }

        .currentDate,
        .pickerItem select,
        .appointmentCalendar .calendarDay,
        .calendar.popup th,
        .calendar.popup table tbody td,
        .calendar-new-header > *,
        .form-collapse-table {
            color: #6A1B00;
        }

        .appointmentCalendar .dayOfWeek {
            color: #6A1B00;
        }

        .appointmentSlotsContainer > * {
            color: rgba(106, 27, 0, 0.75);
        }

        li[data-type=control_fileupload] .jfUpload-heading,
        ::placeholder,
        .form-dropdown.is-active,
        .form-dropdown:first-child,
        .form-spinner-input {
            color: #FB6F41;
        }

        .appointmentCalendar .calendarWeek .calendarDay.isUnavailable,
        .calendar tr.days td.otherDay,
        .calendar tr.days td:hover:not(.unselectable) {
            color: #FB6F41;
        }

        span.form-sub-label, label.form-sub-label, div.form-header-group .form-subHeader,
        .rating-item-title.for-to > label:first-child,
        .rating-item-title.for-from > label:first-child,
        .rating-item-title .editor-container * {
            color: #6A1B00;
        }

        .form-pagebreak-back {
            color: #FFFFFF;
        }

        .rating-item input:checked + label,
        .rating-item input:focus + label {
            color: #FFFFFF;
        }

        /* border-colors */
        .form-dropdown,
        .form-textarea,
        .form-textbox,
        li[data-type=control_fileupload] .qq-upload-button,
        .rating-item label,
        .rating-item input:focus + label,
        .rating-item input:checked + label,
        .jf-form-buttons,
        .form-checkbox + label:before, .form-checkbox + span:before, .form-radio + label:before, .form-radio + span:before,
        .signature-pad-passive,
        .signature-wrapper,
        .appointmentCalendarContainer,
        .appointmentField .timezonePickerName,
        .appointmentDayPickerButton,
        .appointmentCalendarContainer .monthYearPicker .pickerItem + .pickerItem,
        .appointmentCalendarContainer .monthYearPicker,
        .appointmentCalendar .calendarDay.isActive .calendarDayEach, .appointmentCalendar .calendarDay.isToday .calendarDayEach, .appointmentCalendar .calendarDay:not(.empty):hover .calendarDayEach,
        .calendar.popup:before,
        .calendar-new-month,
        .form-matrix-column-headers, .form-matrix-table td, .form-matrix-table td:last-child,
        .form-matrix-table th, .form-matrix-table th:last-child, .form-matrix-table tr:last-child td, .form-matrix-table tr:last-child th, .form-matrix-table tr:not([role=group]) + tr[role=group] th,
        .form-matrix-headers.form-matrix-column-headers,
        .isSelected .form-matrix-column-headers:nth-last-of-type(2),
        li[data-type=control_inline] input[type=email], li[data-type=control_inline] input[type=number],
        li[data-type=control_inline] input[type=tel], li[data-type=control_inline] input[type=text],
        .stageEmpty.isSmall {
            border-color: rgba(106, 27, 0, 0.75);
        }

        .rating-item input:hover + label {
            border-color: rgba(106, 27, 0, 0.75);
        }

        .appointmentSlot,
        .form-checkbox:checked + label:before, .form-checkbox:checked + span:before, .form-checkbox:checked + span label:before,
        .form-radio:checked + label:before, .form-radio:checked + span:before,
        .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .signature-wrapper:focus,
        .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
        .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .signature-wrapper:hover {
            border-color: rgba(106, 27, 0, 0.75);
        }

        .calendar tr.days td:hover:not(.unselectable):after {
            border-color: #FB6F41;
        }

        .form-header-group,
        .form-buttons-wrapper, .form-pagebreak, .form-submit-clear-wrapper,
        .form-pagebreak-next,
        .form-pagebreak-back,
        .form-checkbox:hover + label:before, .form-checkbox:hover + span:before, .form-radio:hover + label:before, .form-radio:hover + span:before {
            border-color: #FB6F41;
        }

        /* background-colors */
        .form-line-active {
            background-color: #FFEFBC;
        }

        .form-line-error {
            background-color: #FFD6D6;
        }

        .form-matrix-column-headers, .form-matrix-row-headers,
        .form-spinner-button-container > *,
        .form-collapse-table,
        .form-collapse-table:hover,
        .appointmentDayPickerButton {
            background-color: #FB6F41;
        }

        .calendar.popup, .calendar.popup table,
        .calendar.popup table tbody td:after {
            background-color: #FFDF79;
        }

        .appointmentCalendar .calendarDay.isActive .calendarDayEach,
        .appointmentFieldRow.forSelectedDate,
        .calendar.popup tr.days td.selected:after,
        .calendar.popup:after,
        .submit-button,
        .form-checkbox:checked + label:before, .form-checkbox:checked + span:before, .form-checkbox:checked + span label:before,
        .form-radio + label:after, .form-radio + span:after,
        .rating-item input:checked + label,
        .appointmentCalendar .calendarDay:after,
        .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
        .rating-item input:focus + label {
            background-color: #C43100;
        }

        .appointmentSlot.active {
            background-color: #C43100 !important;
        }

        .clear-pad-btn,
        .appointmentCalendar .dayOfWeek,
        .calendar.popup th {
            background-color: #FB6F41 !important;
        }

        .appointmentField .timezonePicker:hover + .timezonePickerName,
        .form-spinner-button-container > *:hover {
            background-color: #E19880;
        }

        .form-matrix-values,
        .form-matrix-values,
        .signature-wrapper,
        .signature-pad-passive,
        .rating-item label,
        .form-checkbox + label:before, .form-checkbox + span:before,
        .form-radio + label:before, .form-radio + span:before {
            background-color: #FFFFFF;
        }

        li[data-type=control_fileupload] .qq-upload-button {
            background-color: #FFFFFF;
        }

        .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected
        .questionLine-editButton.forRemove:after,
        .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected .questionLine-editButton.forRemove:before {
            background-color: #FFFFFF;
        }

        .appointmentCalendarContainer, .appointmentSlot,
        .rating-item-title.for-to > label:first-child,
        .rating-item-title.for-from > label:first-child,
        .rating-item-title .editor-container *,
        .calendar-opened {
            background-color: transparent;
        }

        .appointmentCalendar .calendarDay.isSelected:after {
            color: #FFFFFF;
        }

        /* shadow */
        .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .signature-wrapper:hover,
        .calendar.popup:before,
        .jSignature:hover,
        li[data-type=control_fileupload] .qq-upload-button-hover,
        .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
        .form-line[data-payment="true"] .form-product-item .p_checkbox:hover .select_border,
        .form-checkbox:hover + label:before, .form-checkbox:hover + span:before, .form-radio:hover + label:before, .form-radio:hover + span:before,
        .calendar.popup:before {
            border-color: rgba(106, 27, 0, 0.5);
            box-shadow: 0 0 0 2px rgba(106, 27, 0, 0.25);
        }

        .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .signature-wrapper:focus,
        li[data-type=control_fileupload] .qq-upload-button-focus,
        .form-checkbox:focus + label:before, .form-checkbox:focus + span:before, .form-radio:focus + label:before, .form-radio:focus + span:before,
        .calendar.popup:before {
            border-color: rgba(106, 27, 0, 1);
            box-shadow: 0 0 0 3px rgba(106, 27, 0, 0.25);
        }

        .calendar.popup table tbody td {
            box-shadow: none;
        }

        /* button colors */
        .submit-button {
            background-color: #370F01;
            border-color: #370F01;
        }

        .submit-button:hover {
            background-color: #210901;
            border-color: #210901;
        }

        .form-pagebreak-next {
            background-color: #FB6F41;
        }

        .form-pagebreak-back {
            background-color: #FB6F41;
        }

        .form-pagebreak-back:hover {
            background-color: #974327;
            border-color: #974327;
        }

        .form-pagebreak-next:hover {
            background-color: #974327;
            border-color: #974327;
        }

        .form-sacl-button, .form-submit-print {
            background-color: transparent;
            color: rgba(106, 27, 0, 0.75);
            border-color: rgba(106, 27, 0, 0.75);
        }

        .form-sacl-button:hover, .form-submit-print:hover,
        .appointmentSlot:not(.disabled):not(.active):hover,
        .appointmentDayPickerButton:hover,
        .rating-item input:hover + label {
            background-color: #E19880;
        }


        .form-line[data-payment="true"] hr,
        .form-line[data-payment=true] .p_item_separator,
        .form-line[data-payment="true"] .payment_footer.new_ui,
        .form-line.card-3col .form-product-item.new_ui,
        .form-line.card-2col .form-product-item.new_ui {
            border-color: rgba(106, 27, 0, 0.75);
            border-color: rgba(106, 27, 0, .2);
        }

        .form-line[data-payment=true] .form-product-category-item {
            border-color: rgba(106, 27, 0, 0.75);
            border-color: rgba(106, 27, 0, .3);
        }


        .form-product-category-item:after {
            background-color: rgba(106, 27, 0, .7);
            border-color: rgba(106, 27, 0, .7);
        }
        .form-all {
            font-family: Inter, sans-serif;
        }

        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-family: Inter, sans-serif;
        }

        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-family: Inter, sans-serif;
        }

        .form-header-group {
            font-family: Inter, sans-serif;
        }

        .form-label {
            font-family: Inter, sans-serif;
        }

        .form-label.form-label-auto {

            display: block;
            float: none;
            text-align: left;
            width: 100%;

        }

        /*.form-line {*/
        /*    margin-top: 12px 36px 12px 36px px;*/
        /*    margin-bottom: 12px 36px 12px 36px px;*/
        /*}*/

        .form-all {
            max-width: 752px;
            width: 100%;
        }

        .form-label.form-label-left,
        .form-label.form-label-right,
        .form-label.form-label-left.form-label-auto,
        .form-label.form-label-right.form-label-auto {
            width: 230px;
        }

        .form-all {
            font-size: 16px
        }

        .form-all .qq-upload-button,
        .form-all .qq-upload-button,
        .form-all .form-submit-button,
        .form-all .form-submit-reset,
        .form-all .form-submit-print {
            font-size: 16px
        }

        .form-all .form-pagebreak-back-container,
        .form-all .form-pagebreak-next-container {
            font-size: 16px
        }

        .supernova {
            background-color: #FB6F41;
        }

        .supernova body {
            background: transparent;
        }

        .supernova .form-all, .form-all {
            background-color: #FFDF79;
        }

        .form-all {
            color: #6A1B00;
        }

        .form-header-group .form-header {
            color: #6A1B00;
        }

        .form-header-group .form-subHeader {
            color: #6A1B00;
        }

        .form-label-top,
        .form-label-left,
        .form-label-right,
        .form-html,
        .form-checkbox-item label,
        .form-radio-item label {
            color: #6A1B00;
        }

        .form-sub-label {
            color: #84351a;
        }

        .form-textbox,
        .form-textarea,
        .form-dropdown,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input {
            background-color: #FFFFFF;
        }

        .form-line-error {
            overflow: hidden;
            transition: none;
            background-color: #FFD6D6;
        }

        .form-line-error .form-error-message {
            background-color: #FF3200;
            clear: both;
            float: none;
        }

        .form-line-error .form-error-arrow {
            border-bottom-color: #FF3200;
        }

        .form-line-error input:not(#coupon-input),
        .form-line-error textarea,
        .form-line-error .form-validation-error {
            border: 1px solid #FF3200;
        . box-shadow(0 0 3 px #FF3200);
        }

        .supernova {
            background-image: none;
        }

        #stage {
            background-image: none;
        }

        .form-all {
            background-image: none;
        }

        .ie-8 .form-all:before {
            display: none;
        }

        .ie-8 {
            margin-top: auto;
            margin-top: initial;
        }

        /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
        /* Injected CSS Code */
    </style>
    <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
    <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.22676" type="text/javascript"></script>
</head>
<body>
    <div id="toast">
    </div>
    <form class="jotform-form" action="" method="POST">
        {{ csrf_field()}}
        <input type="hidden" name="formID" value="{{$i=1}}"/>
        <div role="main" class="form-all">
            <ul class="form-section page-section">
                <li id="cid_1" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-large">
                        <div class="header-text httal htvam">
                            <h1 id="header_1" class="form-header" data-component="header">
                                Questionnaire
                            </h1>
                            <div id="subHeader_1" class="form-subHeader">
                                Thank you for taking the time to answer these questions.</br>
                                <b style="font-size: 20px">Good Luck!</b>
                            </div>
                        </div>
                    </div>
                </li>
                @foreach($questionnaires as $key)
                <li class="form-line" data-type="control_radio" id="id_9">
                    <div id="cid_9" class="form-input-wide" data-layout="full" style="display: flex;">
                        <div class="form-single-column" role="group" aria-labelledby="label_9" data-component="radio" style="max-width: 400px">
                            <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9">
                                {{$i++.'. '.$key->question}}
                                @if(sizeof($corrects)==0)
                                    <i style="color: red;font-size: 20px" class="fa fa-times-circle" aria-hidden="true"></i>
                                @elseif(in_array($key->id,$corrects))
                                    <i style="color: blue;font-size: 20px" class="fa fa-check" aria-hidden="true"></i>
                                @else
                                    <i style="color: red;font-size: 20px" class="fa fa-times-circle" aria-hidden="true"></i>
                                @endif
                            </label>
                            <span class="form-radio-item" style="clear:left">
                              <span class="dragger-item">
                              </span>
                                @if($key->answer1 == $data[$key->id])
                                    <input type="radio" class="form-radio" id="{{$key->id.'_0'}}" name="{{$key->id}}" value="{{$key->answer1}}" checked="checked"/>
                                @else
                                    <input type="radio" class="form-radio" id="{{$key->id.'_0'}}" name="{{$key->id}}" value="{{$key->answer1}}"/>
                                @endif
                                @if($key->answer1==$key->correctAnswer)
                                  <label style="color: #0000ff" id="label_input_9_0" for="{{$key->id.'_0'}}">
                                     {{$key->answer1}}
                                  </label>
                                @elseif($key->answer1 == $data[$key->id])
                                    <label style="color: red" id="label_input_9_0" for="{{$key->id.'_0'}}">
                                     {{$key->answer1}}
                                  </label>
                                @else
                                    <label id="label_input_9_3" for="{{$key->id.'_0'}}">
                                        {{$key->answer1}}
                                    </label>
                                @endif
                            </span>
                            <span class="form-radio-item" style="clear:left">
                              <span class="dragger-item">
                              </span>
                              @if($key->answer2 == $data[$key->id])
                                    <input type="radio" class="form-radio" id="{{$key->id.'_1'}}" name="{{$key->id}}" value="{{$key->answer2}}" checked="checked"/>
                              @else
                                <input type="radio" class="form-radio" id="{{$key->id.'_1'}}" name="{{$key->id}}" value="{{$key->answer2}}"/>
                              @endif
                                @if($key->answer2==$key->correctAnswer)
                                  <label style="color: blue" id="label_input_9_1" for="{{$key->id.'_1'}}">
                                      {{$key->answer2}}
                                  </label>
                                @elseif($key->answer2 == $data[$key->id])
                                    <label style="color: red"  id="label_input_9_1" for="{{$key->id.'_1'}}">
                                        {{$key->answer2}}
                                    </label>
                                @else
                                    <label id="label_input_9_3" for="{{$key->id.'_1'}}">
                                        {{$key->answer2}}
                                    </label>
                                @endif
                            </span>
                            <span class="form-radio-item" style="clear:left">
                              <span class="dragger-item">
                              </span>
                              @if($key->answer3 == $data[$key->id])
                                    <input type="radio" class="form-radio" id="{{$key->id.'_2'}}" name="{{$key->id}}" value="{{$key->answer3}}" checked="checked"/>
                                @else
                                    <input type="radio" class="form-radio" id="{{$key->id.'_2'}}" name="{{$key->id}}" value="{{$key->answer3}}"/>
                                @endif
                                @if($key->answer3==$key->correctAnswer)
                                    <label style="color: blue" id="label_input_9_2" for="{{$key->id.'_2'}}">
                                        {{$key->answer3}}
                                    </label>
                                @elseif($key->answer3 == $data[$key->id])
                                    <label style="color: red" id="label_input_9_2" for="{{$key->id.'_2'}}">
                                    {{$key->answer3}}
                                    </label>
                                @else
                                    <label id="label_input_9_3" for="{{$key->id.'_2'}}">
                                        {{$key->answer3}}
                                    </label>
                                @endif
                            </span>
                            <span class="form-radio-item" style="clear:left">
                              <span class="dragger-item">
                              </span>
                              @if($key->answer4 == $data[$key->id])
                                    <input type="radio" class="form-radio" id="{{$key->id.'_3'}}" name="{{$key->id}}" value="{{$key->answer4}}" checked="checked"/>
                              @else
                                    <input type="radio" class="form-radio" id="{{$key->id.'_3'}}" name="{{$key->id}}" value="{{$key->answer4}}"/>
                              @endif
                                @if($key->answer4==$key->correctAnswer)
                                    <label style="color: blue"  id="label_input_9_3" for="{{$key->id.'_3'}}">
                                        {{$key->answer4}}
                                    </label>
                                @elseif($key->answer4 == $data[$key->id])
                                    <label style="color: red" id="label_input_9_3" for="{{$key->id.'_3'}}">
                                        {{$key->answer4}}
                                    </label>
                                @else
                                    <label id="label_input_9_3" for="{{$key->id.'_3'}}">
                                        {{$key->answer4}}
                                    </label>
                                @endif
                            </span>
                        </div>
                        <div>
                            <img style="max-width: 200px" src="{{$key->images}}" alt="">
                        </div>
                        </div>
                </li>
                @endforeach
                <li class="form-line" data-type="control_button" id="id_34">
                    <div id="cid_34" class="form-input-wide" data-layout="full">
                        <div data-align="auto" class="form-buttons-wrapper form-buttons-auto jsTest-button-wrapperField">
                            <a  style="background-color: blue" id="input_34" href="{{URL::to('/list-lession')}}"
                                    class="form-submit-button submit-button jf-form-buttons jsTest-submitField"
                                    data-component="button" data-content="">
                                Làm lại
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </form>
    @if(isset($point))
        <script>
            showResultsToast();
            function toast({
                               title='',
                               message='',
                               type='error',
                               duration=3000
                           }){
                const main = document.getElementById('toast');
                if(main){
                    const toast = document.createElement('div');
                    //auto remove
                    const autoRemoveId = setTimeout(function(){
                        main.removeChild(toast);
                    },duration + 1000);
                    //Remove thoat
                    toast.onclick = function(e){
                        if(e.target.closest('.toast__close')){
                            main.removeChild(toast);
                            clearTimeout(autoRemoveId);
                        }
                    }
                    const icons ={
                        success:'fas fa-check-circle',
                        info:'fas fa-info-circle',
                        warning:'fas fa-exclamation-circle',
                        error:'fas fa-exclamation-circle'
                    };
                    const icon  =icons[type];
                    const delay = (duration / 1000).toFixed(2);
                    toast.classList.add('toast',`toast--${type}`);
                    toast.style.animation = `slideInLeft ease .3s,fadeOut linear 1s ${delay}s forwards`;
                    toast.innerHTML= `
                        <div class="toast__icon">
                            <i class="${icon}"></i>
                        </div>
                        <div class="toast__body">
                            <h3 class="toast__title">${title}</h3>
                            <b class="toast_msg">${message}</b>
                        </div>
                        <div class="toast__close">
                            <i class="fas fa-times"></i>
                        </div>
                    `;
                    var audio = new Audio('http://nhacchuongvui.com/wp-content/uploads/Am-thanh-thong-bao-Facebook-www_nhacchuongvui_com.mp3');
                    audio.play();
                    main.appendChild(toast);
                }
            }
            function showResultsToast(){
                var point ={{$point}};
                var title = "";
                if(point>5){
                    title = "Ờ mây zing.Gút chóp";
                }else{
                    title = "Toang rồi ông giáo ạ";
                }
                toast({
                    title:'Result:'+title,
                    message:'Total point: '+point+'/'+{{$size}},
                    type:'success',
                    duration:5000
                });
            }
            function showErrorToast(){
                toast({
                    title:'Thất bại',
                    message:'Có lỗi xẩy ra, vui lòng liên hệ quản trị viên',
                    type:'error',
                    duration:5000
                });
            }
        </script>
    @endif
    <script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.22676"></script>
    <script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.22676"></script>
</body>
</html>
@endsection
