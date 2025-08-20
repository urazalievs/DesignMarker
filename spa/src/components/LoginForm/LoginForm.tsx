import { Form } from "antd"
import { Button } from "../../ui/Button/Button"
import Input from "../../ui/Input/Input"
import './styles.scss'

export const LoginForm = () => {

  // const onFinishFailed=(e)=>{
  //   console.log(e);
    
  // }
  // const onFinish=(values)=>{
  //   console.log(values);
  // }

  return (
    <div className="login_form">
      <div className="">
          <img className="login_form_icon" src="images/user.png" alt="userPhoto" />
      </div>
      <Form
        name="basic"
        style={{ width:'70%' }}
        onFinish={onFinish}
        onFinishFailed={onFinishFailed}
        layout="vertical"
        autoComplete="off"
      >
        <Form.Item
          label="Username"
          name="username"
          rules={[{ required: true, message: 'Please input your username!' }]}
        >
          <Input />
        </Form.Item>
        <Form.Item
          label="Password"
          name="password"
          rules={[{ required: true, min: 4, message: 'Please input your password!' }]}
        >
          <Input type='password'/>
        </Form.Item>
        <Form.Item label={null} style={{margin:'auto'}}>
          <Button htmlType="submit">
            Sign In
          </Button>
        </Form.Item>
      </Form>
    </div>
  )
}
