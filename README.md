## Installation 
```shell
$ composer install
```

## How to reproduce 
```shell
$ vendor/bin/phpstan
```

## Actual behavior 
```
➜  rector-6614 git:(master) vendor/bin/phpstan
Note: Using configuration file /home/kocal/workspace-os/rector-6614/phpstan.neon.
 3/3 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

 ------ ------------------------------------------------------------------------------------------------------------ 
  Line   rector/src/Rules/AddRouteAnnotationToPages.php                                                              
 ------ ------------------------------------------------------------------------------------------------------------ 
  23     Call to method provideParameter() on an unknown class Symplify\PackageBuilder\Parameter\ParameterProvider.  
         💡 Learn more at https://phpstan.org/user-guide/discovering-symbols                                          
 ------ ------------------------------------------------------------------------------------------------------------ 

                                                                                                                        
 [ERROR] Found 1 error                                                                                                  
                                                                                                                        

```

## Expected behavior 

```
➜  rector-6614 git:(master) ✗ vendor/bin/phpstan
Note: Using configuration file /home/kocal/workspace-os/rector-6614/phpstan.neon.
 3/3 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%


                                                                                                                        
 [OK] No errors                                                                                                         
                                                                                                                        
```
