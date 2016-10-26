@extends('common.layout')

@section('title','xiao')
@section('content')
   <div class="content">
    <div class="title">
        <ul>
            <li v-for="todo in todos">
            @{{ todo.text }}
            </li>
        </ul>
    </div>
</div>
<div class="page__bd page__bd_spacing">
	<ul>
		<li v-for='todo in todo2s'>
			@{{todo.message}}
		</li>
	</ul>
</div>
<div class="content1">
	<input type="text" v-model="newTodo" v-on:keyup.enter="addTodo">
	<ul>
		<li v-for="todo in todoli">
			<span>@{{todo.text}}</span>
			<button v-on:click="removeTodo($index)">X</button>
		</li>
	</ul>
</div>
@endsection
@section('my-js')
<script type="text/javascript">
 new Vue({
        el: '.title',
        data: {
            todos: [
                { text: 'Learn Laravel' },
                { text: 'Learn Vue.js' },
                { text: 'At LaravelAcademy.org' }
            ]
        }
    })
 new Vue({
 	el:'.page__bd_spacing',
 	data:{
 		todo2s:[
		{message:'xiao'},
		{message:'xiao'},
 		]
 	}
 })
 new Vue({
 	el:'.content1',
 	data:{
 		newTodo:'',
 		todoli:[
 			{text:'添加todo'},
 			{text:'添加todo2'}
 		]
 	},
 	methods:{
 		addTodo:function(){
 			var text = this.newTodo.trim();
 			if(text){
 				this.todoli.push({text:text});
 				this.newTodo = "";
 			}
 		},
 		removeTodo:function(index){
 		this.todoli.splice(index,1);
 	}
 	},

 });
</script>
@endsection