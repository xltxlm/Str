package Features

type Str_to_Date_Timestamp struct {
    /*  */
    Value string

}

func NewStr_to_Date_Timestamp(Value string) *Str_to_Date_Timestamp{
    var this = new(Str_to_Date_Timestamp)
    this.SetValue(Value);
    return this
}

func (this *Str_to_Date_Timestamp)GetValue() string{
    return this.Value;
}

func (this *Str_to_Date_Timestamp)SetValue(Value string) *Str_to_Date_Timestamp{
    this.Value = Value;
    return this
}

