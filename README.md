# Nova Appendable Select

<img src="https://mero.co/wp-content/uploads/2019/03/merologotransparent-136x60.png" align="right"
     title="Merotech Logo" width="136" height="60">

Nova Appendable Select is a multi field that contains a select element and an input element. The select elements populates based on the Nova resource you are calling the component from and the tableName you pass as seen below. 

    AppendableDynamicDropdown::make('Brand')->rules('required')

In the example above we add this to the Nova Resource Router. So this multi field component will now populate all **unique brand names** from the **routers table**. To add a new brand name not already present in the **routers table** the input field will take new values and when submitting the form this new value will be present in the select field on subsequent form submits. 


## Who Uses Nova Appendable Select

* [Merotech](https://mero.co) we built this :D 

## Usage

### Laravel Nova Applications

Suitable when you want a dynamic select field that is populated based on a model in your database and you want to add to this

<details><summary><b>Show instructions</b></summary>

1. Install the preset:
	```
    $ composer require merotech/nova-appendable-select
	```

2. Add the Nova Field Component to your Nova resource
	```
    use Merotech\AppendableDynamicDropdown\AppendableDynamicDropdown;
	```
	
3. You're all set!

</details>
