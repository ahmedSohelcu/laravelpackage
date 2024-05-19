1.cast
2.exception
3.interface
4.implements
5.listener
6.scope
7.rule
8.__serialize
9.contracts
10. Log
11.getFacadeAccessor
12. abstract class Facade
13.__invoke
14.app



 Log::info('Pruning Stale Connections');

 protected function generateId(): string
    {
        return sprintf('%d.%d', random_int(1, 1_000_000_000), random_int(1, 1_000_000_000));
    }