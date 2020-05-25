@extends('layouts.webbookapp')
<style media="screen">
  .content{
    width: 500px;
    text-align: left;
  }
  form{
    text-align: right;
    margin-left: 0;
  }
  .form_items{
    margin-right: 2rem;
  }
  table {
    margin-left: 250px;
  }
  table th{
    width: 100px;
    text-align: left;
    margin-right: 2rem;
  }
  table td{
    width: 150px;
  }
  input,textarea {
    /* 角丸 */
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    padding: 0.3rem;
    border: inset;
    border-width: 2px;
    background: white;
  }
  .back_button{
    border-style: outset;
    border-width: 2px;
    background-color: #95A3B3;
    padding: 0.3rem 1rem 0.3rem 1rem;
    height: 2rem;
  }
  .back_button:hover{
    background-color: #687383;
  }
  .next_button{
    border-style: outset;
    border-width: 2px;
    background-color: #84DCC6;
    padding: 0.3rem 1rem 0.3rem 1rem;
    height: 2rem;
  }
  .next_button:hover{
    background-color: #6AB49E;
  }
</style>
