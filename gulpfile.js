var gulp = require('gulp'), connect  =  require('gulp-connect-php'), browserSync = require('browser-sync');
console.log('Iniciando tarefas do gulp...')
gulp.task('connect-sync', function() {
	connect.server({}, function(){
	console.log('Conectando ao servidor local...');
	browserSync({
	proxy: 'localhost'
})
	console.log('Feito, o Gulp está pronto e utilizando o BROWSER-SYNC.');
});
});

	gulp.watch('**/ *.php').on('change', function(){
		browserSync.reload();
		console.log('Página recarregada com sucesso');
	});	

