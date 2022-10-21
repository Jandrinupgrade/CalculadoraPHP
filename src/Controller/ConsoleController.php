<?php
namespace App\Controller;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
 
class ConsoleController extends Command
 {
public function configure()
{
$this->setName('jandrin:calculator')
->setDescription('Calculate operation')
->addArgument('operation', InputArgument::REQUIRED, 'operation',null)
->addArgument('number1', InputArgument::REQUIRED,'First number',null)
->addArgument('number2', InputArgument::REQUIRED,'Second number',null);


}
public function execute(InputInterface $input, OutputInterface $output)
{
$operation = $input->getArgument('operation');
$operatorA = $input->getArgument('number1');
$operatorB = $input->getArgument('number2');
$result = '';
if($operation ==='add'){
        $result = $operatorA + $operatorB;
       }

    if($operation ==='subtract'){
        $result = $operatorA - $operatorB;
        }

    if($operation ==='multiply'){
        $result = $operatorA * $operatorB;
    
    }

    if($operation ==='divide'){
        $result = $operatorA / $operatorB;
    
    }
    $output -> writeln($result);
    return Command::SUCCESS;

} 

}
