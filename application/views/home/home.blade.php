<html>
<head>
`		<title>Home Page </title>
</head>

<body>


	<table>
    	<thead>
        	<th>Id</th>
            <th>Title</th>
            <td>Author</td>
        </thead>
        <tbody>
        
        <?php
			//print_r( $posts );
		?>
        @foreach ( $posts->results as $post )
        	<tr>
            	<td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->author->username}}</td>
            </tr>
            
        @endforeach
        </tbody>
    </table>


    	<div class="row">
    		<div class="span8">
	    		{{ $posts -> links(); }}
	   		 </div>
		</div>
</body>
</html>