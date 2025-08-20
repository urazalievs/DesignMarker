import { Input as AntInput, type InputProps} from 'antd'

export default function Input(props:InputProps) {
  return (
    <>
        <AntInput 
            {...props}
            placeholder="Basic usage" 
            size={props.size ?? 'large'}
        />
    </>
  )
}
