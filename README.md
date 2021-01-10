# Livewire Package Demo

This is a demonstration of how you can create a package which contains Livewire components, and test them using [Livewire Dusk Testbench](https://github.com/joshhanley/livewire-dusk-testbench).

## The Components

This demo contains two different types of Livewire components:

- Counter Component
- Custom Input

The counter component, is a standard Livewire component which has both the component class and the required blade view. It's files can be found in `src/CounterComponent.php` and `resources/views/livewire/counter-component.blade.php`

The custom input, is a blade component which makes use of Livewire features (such as wire:model) which only has a blade view.

## The Tests

There are a couple of different tests in the package which show how you could test your components to ensure they are working as expected.

The tests are in `tests/Browser` under three different folders:

- Counter
- ComponentWithCounter
- ComponentWithCustomInput

The `Counter` test folder contains an example of how you could test your component in isolation, to test all it's functionality.

The `ComponentWithCounter` test folder contains an example of using the `Counter Component` inside another component and testing that works as expected.

The `ComponentWithCustomInput` test folder contains an example of using the `Custom Input` blade component inside a Livewire component to test it operates as expected.

## Further Information

For any information on how to use Livewire Dusk Testbench or anything it uses, or creative packages, consult the relevant documentation.

- [Livewire Dusk Testbench](https://github.com/joshhanley/livewire-dusk-testbench)
- [Livewire](https://laravel-livewire.com/docs)
- [Orchestra Testbench Dusk](https://github.com/orchestral/testbench-dusk)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Orchestra Testbench](https://github.com/orchestral/testbench)
- [Laravel Package Development](https://laravel.com/docs/packages)
