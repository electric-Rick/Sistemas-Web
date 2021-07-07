echo 'Este processo deletará os arquivos que forem colocados como parâmetro'
echo 'Digite a extensão dos arquivos que deseja destruir: '
read ARQ
while true;
do rm ./*$ARQ;
break;
done;

echo 'Feito!'
